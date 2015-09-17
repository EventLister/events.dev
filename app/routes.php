<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('attend/{id}', 'EventsController@attend');
Route::get('/myEvents', 'EventsController@userEvents');
Route::get('/allevents', 'EventsController@showEvents');

// Put me in the UsersController!!!
Route::get('me', 'EventsController@userProfile');

Route::post('login', 'HomeController@doLogin'); 
Route::get('logout', 'HomeController@doLogout');

Route::get('/', 'HomeController@showWelcome');

Route::resource('events', 'EventsController');
Route::resource('profile', 'UsersController');