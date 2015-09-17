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
Route::get('otherProfile/{id}', 'EventsController@otherProfile'); 
Route::get('attend/{id}', 'EventsController@attend');
Route::get('profile', 'EventsController@userProfile'); 
Route::get('showevents', 'HomeController@showEvents'); 
Route::post('login', 'HomeController@doLogin'); 
Route::get('logout', 'HomeController@doLogout');
Route::get('/home', 'EventsController@index');
Route::get('show/{id}', 'EventsController@show');
Route::get('/editProfile/{id}', 'EventsController@editProfile');
Route::put('/updateEvent/{id}', 'EventsController@update');
Route::get('/editEvent/{id}', 'EventsController@edit');
Route::put('/editUser/{id}', 'EventsController@updateUser');
Route::get('/myEvents', 'EventsController@userEvents');
Route::get('/', 'HomeController@showWelcome');
Route::get('createuser', 'EventsController@createUser');

Route::post('users/create', 'EventsController@storeUser');
Route::get('/create', 'EventsController@create');
Route::resource('events', 'EventsController');
