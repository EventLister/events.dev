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
		$events = CalendarEvent::orderBy('event_start', 'desc')->paginate(6);
		return View::make('events.index', compact('events'));
	}

	public function showEvents()
	{
		$events = CalendarEvent::all();
		return View::make('events.events')->with('events', $events);
	}

	public function attend($id)
	{
		
		$user = Auth::user();

		$user->eventsAttending()->attach($id);

		return Redirect::action('EventsController@show', $id);
	}

	public function getNumberAttending($id)
    {
        $event = CalendarEvent::find($id);
        $attendees = $event->attending();
        $number = count($attendees); 
        return $number; 
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

		$file = Input::file('img_url');
		$destinationPath = public_path() . '/img';
		$filename = $file->getClientOriginalName();
		Input::file('img_url')->move($destinationPath, $filename);

		$event= new CalendarEvent();
			$event->event_name = Input::get('event_name');
			$event->event_description = Input::get('event_description');
			$event->event_location = Input::get('event_location');
			$event->event_start = Input::get('event_start');
			$event->event_end = Input::get('event_end');
			$event->img_url = $filename;
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


	       

	/**
	 * Display the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = CalendarEvent::find($id);
		$event->attending = $this->getNumberAttending($id);

		if(!$event) {
 
			Session::flash('errorMessage', "Event with id of $id is not found"); 

			App::abort(404); 
		}

		return View::make('events.show')->with('event', $event);
	}

	public function userEvents()
	{
		$events = CalendarEvent::with('user')->where('user_id', Auth::id())->get();

		if(!$events) {
 
			Session::flash('errorMessage', "No events for user found"); 

			App::abort(404); 
		}

		return View::make('events.my_events')->with('events', $events);
	}

	/**
	 * Show the form for editing the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = CalendarEvent::find($id);

		if(!$event) {

			Session::flash('errorMessage', "Event with id of $id is not found"); 

			App::abort(404);  
		}

		return View::make('events.editEvent')->with('event', $event);
	}


	/**
	 * Update the specified event in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$event = CalendarEvent::find($id);
			if(!$event) {

				Session::flash('errorMessage', "Event with id of $id is not found"); 

				App::abort(404);  
			}
			if(Input::hasFile('img_url')){

				$file = Input::file('img_url');
				$destinationPath = public_path() . '/img';
				$filename = $file->getClientOriginalName();
				Input::file('img_url')->move($destinationPath, $filename);

				$event->event_name = Input::get('event_name');
				$event->event_description = Input::get('event_description');
				$event->event_location = Input::get('event_location');
				$event->event_start = Input::get('event_start');
				$event->event_end = Input::get('event_end');
				$event->img_url = $filename;
				$event->save();
			}

			$event->event_name = Input::get('event_name');
			$event->event_description = Input::get('event_description');
			$event->event_location = Input::get('event_location');
			$event->event_start = Input::get('event_start');
			$event->event_end = Input::get('event_end');
			$event->save();

	        Session::flash('successMessage', 'Event updated successfully!');
           	return Redirect::action('EventsController@show', array($id));
	        
		
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