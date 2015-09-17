<?php

use \Esensi\Model\Model;


class CalendarEvent extends Model {
	protected $fillable = [];

    protected $table = 'events';


	protected $rules = array(
	'event_name' => 'required|max:255',
	'event_description' => 'required',
	'event_location' => 'required|max:255',
	'event_start' => 'required|date',
	'event_end' => 'required|date',
	);

	// delete this function eventually
    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function creator()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function attending()
    {
        return $this->belongsToMany('User', 'event_user', 'event_id', 'user_id');
    }

     
}