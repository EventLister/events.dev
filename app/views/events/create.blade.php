@extends('layouts.master')
@section('title')

@stop
@section('content')

	{{ Form::open(array('action' => 'EventsController@store', 'files' => true)) }}

		@include('events.partials.create_event-form')

	{{Form::close()}}

@stop



