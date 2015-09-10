

	{{ Form::open(array('action' => 'PostsController@store')) }}

		@include('posts.partials.create_event-form')

	{{Form::close()}}


