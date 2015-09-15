<?php

use \Esensi\Model\Model;


class CalendarEvent extends Model {
	protected $fillable = [];

    protected $table = 'events';


	protected $rules = array(
	'event_name' => 'required|max:255',
	'event_description' => 'required',
	'event_location' => 'required|max:255',
	'event_start' => 'required|max:255',
	'event_end' => 'required|max:255',
	);

}