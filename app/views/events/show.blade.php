@extends('layouts.master')
@section('title')
  <title>Upcoming Events</title>
@stop
@section('content')
    <div class="well col-md-10">
        <div>
            <h2>{{{ $event->event_name }}}</h2>
            <p>{{{ $event->event_description }}}</p>
            <p>{{{ $event->event_location }}}</p>
            <p>{{{ $event->event_time }}}</p>
            <img src="/img/{{ $event->img_url }}" alt="">
        </div>
    </div>
@stop
