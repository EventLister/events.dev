<?php

class HomeController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/



	public function tz_list() {
	  $zones_array = array();
	  $timestamp = time();
	  foreach(timezone_identifiers_list() as $key => $zone) {
	    date_default_timezone_set($zone);
	    $zones_array[$key]['zone'] = $zone;
	    $zones_array[$key]['diff_from_GMT'] = 'GMT ' . date('P', $timestamp);
	  }
	  return $zones_array;
	}

	public function showWelcome()
	{
	    return View::make('hello');
	}

	public function showEvents()
	{
		$events = CalendarEvent::all();
		return View::make('events.events')->with('events', $events);
	}
	public function doLogin()
	{
		$username = Input::get('username'); 
		$password = Input::get('password'); 


		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
			Session::flash('successMessage', 'Logged in succesfully!');
			return Redirect::intended('/home');
		} else {
			Session::flash('errorMessage', 'Logged in failed!'); 
			return Redirect::action('HomeController@showWelcome');
		}
	}

	public function doLogout()
	{
		Auth::logout(); 
		Session::flash('errorMessage', 'Logged out!'); 
		return Redirect::action('HomeController@showWelcome');
	}

}
