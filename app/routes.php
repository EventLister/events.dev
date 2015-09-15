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

Route::get('showevents', 'HomeController@showEvents'); 
Route::post('login', 'HomeController@doLogin'); 
Route::get('logout', 'HomeController@doLogout');
Route::get('/home', 'EventsController@index');
Route::get('/editProfile/{id}', 'EventsController@editProfile');
Route::put('/editUser/{id}', 'EventsController@updateUser');
Route::get('/', 'HomeController@showWelcome');
Route::get('createuser', 'EventsController@createUser');

Route::post('users/create', 'EventsController@storeUser');
Route::get('/create', 'EventsController@create');
Route::resource('events', 'EventsController');
