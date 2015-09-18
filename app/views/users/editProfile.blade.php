@extends('layouts.master')

@section('content')

    <h1>Edit User Profile</h1>
    <div class="well col-md-8 col-md-offset-2">
        {{ Form::model($user,array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files' => true)) }}
            @include('users.partials.user-edit-form')
        {{ Form::close() }}
    </div>
@stop