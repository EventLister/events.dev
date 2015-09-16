@extends('layouts.master')
@section('title')


<div class="container">
      <div class="row">
        <div class=" col-md-12 col-lg-12 "> 
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{Auth::user()->first_name}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/avatar.png" class="img-circle img-responsive"> 
                </div>
                
	                <div class=" col-md-12 col-lg-12 "> 
	                  <table class="table table-user-information">
	                    <tbody>
	                      <tr>
	                        <td>Department:</td>
	                        <td>Programming</td>
	                      </tr>
	                      <tr>
	                        <td>Member Since:</td>
	                        <td>{{Auth::user()->created_at}}</td>
	                      </tr>
	                      <tr>
	                        <td>Date of Birth</td>
	                        <td>01/24/1988</td>
	                      </tr>
	                      <tr>
	                        <td>Gender</td>
	                        <td>Male</td>
	                      </tr>
	                      <tr>
	                        <td>Home Address</td>
	                        <td>Metro Manila,Philippines</td>
	                      </tr>
	                      <tr>
	                        <td>Email</td>
	                        <td><a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></td>
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
					<span class="pull-right">
						<a href="/editProfile/{{{Auth::user()->id}}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
					</span>
				</div>
          </div>
        </div>
      </div>
    </div>

    @include('events.partials.events_modal')

@stop
@section('content')
@stop
                     
            