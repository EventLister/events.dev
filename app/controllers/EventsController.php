<?php

class EventsController extends \BaseController {


	public function __construct()
	{
		parent::__construct(); 
		$this->beforeFilter('auth', array('except' => array('index', 'storeUser', 'createUser'))); 
	}

	/**
	 * Display a listing of events
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = CalendarEvent::all();

		return View::make('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new event
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('events.create');
	}

	/**
	 * Store a newly created event in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

			$event= new CalendarEvent();
			$event->event_name = Input::get('event_name');
			$event->event_description = Input::get('event_description');
			$event->event_location = Input::get('event_loaction');
			$event->event_time = Input::get('event_time');
			$event->user_id = Auth::id(); 
			$event->save();

	    // attempt validation
	    if (! $event->save()) {

	    	return Redirect::to('create')
	    	->withErrors($event->getErrors() )
	    	->withInput();
	    }
	     else {
			Session::flash('successMessage', 'Event created successfully!');
			return Redirect::action('EventsController@index');
	    }
	}

	public function createUser()
	{

		$timezones = $this->tz_list();
		
		$time_zone = Form::select('time_zone', $timezones,null,['class' => 'form-control']);


		return View::make('events.create_user', compact('time_zone'));

	}
	       




		public function storeUser()
	{
		$user = new User();
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip_code = Input::get('zip_code');
			$user->phone = Input::get('phone_number');
			$user->time_zone = Input::get('time_zone');

			$user->save();

			Session::flash('successMessage', 'Account created successfully! You may now login.');
			return Redirect::action('HomeController@showWelcome');

	}

	public function editProfile($id)
	{

		$user = User::find($id);

		$timezones = $this->tz_list();
		
		$time_zone = Form::select('time_zone', $timezones, $user->time_zone,['class' => 'form-control']);


		return View::make('events.editProfile', compact('time_zone'))->with('user', $user);
	}
	
	public function updateUser($id)
	{
		$user = User::find($id);

		if(!$user) {

			Session::flash('errorMessage', "User with id of $id is not found"); 

			App::abort(404);  
		}elseif($user->id == Auth::user()->id){

			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip_code = Input::get('zip_code');
			$user->phone = Input::get('phone');
			$user->time_zone = Input::get('time_zone');

			$user->save();
			
			Session::flash('successMessage', 'Account updated successfully!');
			return Redirect::action('EventsController@index');
		}
	}

	/**
	 * Display the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = CalendarEvent::find($id);

		if(!$event) {
 
			Session::flash('errorMessage', "Event with id of $id is not found"); 

			App::abort(404); 
		}

		return View::make('events.show')->with('event', $event);
	}

	/**
	 * Show the form for editing the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = CalanderEvent::find($id);

		if(!$event) {

			Session::flash('errorMessage', "Event with id of $id is not found"); 

			App::abort(404);  
		}

		return View::make('events.edit')->with('event', $event);
	}

	/**
	 * Update the specified event in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), CalanderEvent::$rules);

	    if ($validator->fails()) {

	    	Session::flash('errorMessage', 'Something went wrong, please refer to the errors listed below:');

	       return Redirect::back()->withInput()->withErrors($validator);
	    }

	    else {
			$event = CalanderEvent::find($id);

			if(!$event) {

				Session::flash('errorMessage', "Event with id of $id is not found"); 

				App::abort(404);  
			}

			$event->event_name = Input::get('event_name');
			$event->event_description = Input::get('event_description');
			$event->event_location = Input::get('event_location');
			$event->event_time = Input::get('event_time');
			$event->time_zone = Input::get('time_zone');
			$event->save();

	        Session::flash('successMessage', 'Event updated successfully!');
           	return Redirect::action('EventsController@show', array($id));
	        
		}
	}

	/**
	 * Remove the specified event from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$event = CalanderEvent::find($id);
		$event->delete();

		if(!$event) {
 
			Session::flash('errorMessage', "Event with id of $id is not found"); 

			App::abort(404); 
		}

		Session::flash('successMessage', 'Event deleted successfully!');
	}




	public function tz_list() {
		$zones_array = array();
		$timestamp = time();
		$zones_array[''] = 'Select Timezone...';
		foreach(timezone_identifiers_list() as $key => $zone) {
		    date_default_timezone_set($zone);
		    $current_date_time = date("h:i A T",time());
		    $zones_array[$zone] = 'GMT ' . date('P', $timestamp) . $zone . ' (Now: ' . $current_date_time . ')';
		}
	  return $zones_array;
	}

	
}