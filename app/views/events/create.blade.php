@extends('layouts.master')
@section('title')

@stop
@section('content')

	{{ Form::open(array('action' => 'EventsController@store')) }}

		@include('posts.partials.create_event-form')

	{{Form::close()}}

@stop


