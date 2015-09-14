@extends('layouts.master')

@section('content')

    <h1>Edit User Profile</h1>
    <div class="well col-md-8 col-md-offset-2">
        
    {{ Form::model($user,array('action' => array('EventsController@updateUser', $user->id), 'method' => 'PUT')) }}
        @include('events.partials.user-edit-form')
    {{ Form::close() }}
    </div>
@stop