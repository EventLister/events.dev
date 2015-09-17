@extends('layouts.master')
@section('title')
<title>{{$user->username}}'s Profile</title>
@stop
@section('content')

<div class="container">
      <div class="row">
        <div class=" col-md-12 col-lg-12 "> 
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{$user->username}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/avatar.png" class="img-circle img-responsive"> 
                </div>
                
                    <div class=" col-md-12 col-lg-12 "> 
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Member Since:</td>
                            <td>{{$user->created_at}}</td>
                          </tr>
                          <tr>
                            <td>Gender</td>
                            <td>Male</td>
                          </tr>
                          <tr>
                            <td>Home Address</td>
                            <td>{{$user->address}}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                          </tr>
                          <tr>
                            <td>Phone Number</td>
                            <td>{{Auth::user()->phone}}</td>
                          </tr>
                               
                        </tbody>
                      </table>
                    </div>
              </div>
            </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View Events</button>
                    
                </div>
          </div>
        </div>
      </div>
    </div>

    @include('events.partials.events_modal')

@stop