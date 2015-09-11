<?php

class EventsController extends \BaseController {

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
		// create the validator
	    $validator = Validator::make(Input::all(), CalendarEvent::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Something went wrong, please refer to the errors listed below:');
	       return Redirect::back()->withInput()->withErrors($validator);
	    }

	     else {

	       	$event= new CalendarEvent();
			$event->event_name = Input::get('event_name');
			$event->event_description = Input::get('event_description');
			$event->event_location = Input::get('event_loaction');
			$event->event_time = Input::get('event_time');
			$event->user_id = Auth::id(); 
			$event->save();

			Session::flash('successMessage', 'Event created successfully!');


			return Redirect::action('EventsController@index');
	    }
	}

		public function storeUser()
	{
		$user= new User();
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->address_line_2 = Input::get('address_line_2');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip_code = Input::get('zip_code');
			$user->phone = Input::get('phone');
			$user->time_zone = Input::get('time_zone');

			$user->save();

			Session::flash('successMessage', 'Account created successfully! You may now login.');
			return Redirect::action('HomeController@showLogin');

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

}