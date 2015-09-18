@extends('layouts.master')
@section('title')
  <title>Upcoming Events</title>
@stop
@section('content')
    <div class="well col-md-10 col-md-offset-1">
        <div>
            <h2>{{{ $event->event_name }}} Hosted By:<a href="{{{ action('UsersController@show' , $event->creator->id) }}}"> {{{$event->creator->username}}}</a> </h2>
            <p>Where: {{{ $event->event_location }}}</p>
            <p>Start: {{{ $event->event_start }}}</p>
            <p>Finish: {{{ $event->event_end }}}</p>
            <p>Description: {{{ $event->event_description }}}</p>
            <p>Attending: {{{$event->attending()->count()}}}</p>
            @if($event->img_url != '')
                <img src="/img/{{ $event->img_url }}" alt="">
            @endif

            <div class="panel-footer">
            @if ($event->attending->contains(Auth::id()))
               <a href="{{{ action('EventsController@unAttend' , $event->id) }}}"> <button type="button" class="btn btn-info btn-lg">Unattended Event</button></a>
            @else
               <a href="{{{ action('EventsController@attend' , $event->id) }}}"> <button type="button" class="btn btn-info btn-lg">Attend Event</button></a>
            @endif
        </div>
    </div>
@stop
              

