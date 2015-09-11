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
			$event->event_name = Input::get('title');
			$event->event_description = Input::get('body');
			$event->event_location = Input::get('body');
			$event->event_time = Input::get('body');
			$event->time_zone = Input::get('body');
			$event->user_id = Auth::id(); 
			$event->save();

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
		$event = CalendarEvent::findOrFail($id);

		return View::make('events.show', compact('event'));
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

		return View::make('events.edit', compact('event'));
	}

	/**
	 * Update the specified event in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = CalendarEvent::findOrFail($id);

		$validator = Validator::make($data = Input::all(), CalendarEvent::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$event->update($data);

		return Redirect::route('events.index');
	}

	/**
	 * Remove the specified event from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		CalendarEvent::destroy($id);

		return Redirect::route('events.index');
	}

}