@extends('layouts.master')
@section('title')
  <title>Upcoming Events</title>
@stop
@section('content')
    <div class="well col-md-10 col-md-offset-1">
        <div>
            <h2>{{{ $event->event_name }}}</h2>
            <p>Where: {{{ $event->event_location }}}</p>
            <p>Start: {{{ $event->event_start }}}</p>
            <p>Finish: {{{ $event->event_end }}}</p>
            <p>Description: {{{ $event->event_description }}}</p>
            @if($event->img_url != '')
                <img src="/img/{{ $event->img_url }}" alt="">
            @endif
        </div>
    </div>
@stop
