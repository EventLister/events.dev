<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" href="/css/hello.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	</head>
	<body>
		<header>
			
		</header>
		<main>
			<div class="container">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  Sign Up
			</button>
			</div>
			<div class="modal fade" id="myModal">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> Create User</h4>
			      </div>
			      <div class="modal-body">
			      	<div class="well" id="form">
						{{ Form::open(array('action' => 'EventsController@storeUser')) }}
							@include('events.partials.create_user_form')
						{{Form::close()}}
					</div>
			      </div>
			      <div class="modal-footer">
			        
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</main>
		<footer>
			<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		    <!-- Latest compiled and minified JavaScript -->
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>