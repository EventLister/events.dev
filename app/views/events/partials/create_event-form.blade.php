
<div class="well colors col-sm-offset-2 col-sm-8 col-md-8">

	<div class="form-group @if($errors->has('title')) has-error @endif">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, ['class' => 'form-control'])}}
	</div>

	<div class="form-group @if($errors->has('body')) has-error @endif">
		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>

	<div>
		<button class="btn btn-primary pull-left"> Create Event </button>
	</div>
	
</div>