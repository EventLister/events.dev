<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" href="/css/hello.css">
	</head>
	<body>
		<header>
			
		</header>
		<main>
			<div class="container">
				<div class="well">
					{{ Form::open(array('action' => 'EventsController@storeUser')) }}
						@include('events.partials.create_user_form')
					{{Form::close()}}
				</div>
			</div>
		</main>
		<footer>
			
		</footer>
	</body>
</html>