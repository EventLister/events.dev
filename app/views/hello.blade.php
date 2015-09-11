<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<link rel="stylesheet" href="/css/hello.css">
	</head>
	<body>
		<header>
			
		</header>
		<main>
			<div class="container">
				{{ Form::open(array('action' => 'EventsController@store')) }}
					@include('events.partials.create_user_form')
				{{ Form::close() }}
			</div>
		</main>
		<footer>

			<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		    <!-- Latest compiled and minified JavaScript -->
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>