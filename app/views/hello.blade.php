
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
			<div class="row">
				<div>
					@if (Session::has('successMessage'))
			            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
			        @endif
			        @if (Session::has('errorMessage'))
			            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
			        @endif
			        @if($errors->has())
			            <div class="alert alert-danger" role="alert">
			                <ul>
			                    @foreach($errors->all() as $key=> $error)
			                        <li>{{{$error}}}</li>
			                    @endforeach
			                </ul>
			            </div>
			        @endif
				</div>
				<div class="col-md-8 col-md-offset-2 well faded">
					<p>Welcome to event lister</p>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<a href="{{{action('UsersController@create')}}}">
					<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal">
					  Sign Up
					</button></a>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#loginModal">
					  Login
					</button>
				</div>
			</div>
			</div>
			
			<div class="modal fade" id="loginModal">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Login</h4>
			      </div>
			      <div class="modal-body">
			      	<div class="well" id="form">
						{{ Form::open(array('action' => 'HomeController@doLogin')) }}
							@include('events.partials.login_form')
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