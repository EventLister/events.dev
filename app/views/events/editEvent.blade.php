@extends('layouts.master')
@section('title')
<title>Edit Post</title>
@stop
@section('content')

    <h1>Edit User Profile</h1>
    <div class="well col-md-8 col-md-offset-2">
        {{ Form::model($event,array('action' => array('EventsController@update', $event->id), 'method' => 'PUT')) }}
            @include('events.partials.event-edit-form')
        {{ Form::close() }}
    </div>
@stop