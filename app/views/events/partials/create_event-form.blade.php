
<div class="well colors col-sm-offset-2 col-sm-8 col-md-8">

	<div class="form-group @if($errors->has('event_name')) has-error @endif">
		{{ Form::label('event_name', 'Event Name') }}
		{{ Form::text('event_name', null, ['class' => 'form-control'])}}
	</div>

	<div class="form-group @if($errors->has('event_description')) has-error @endif">
		{{ Form::label('event_description', 'Event Description') }}
		{{ Form::textarea('event_description', null, ['class' => 'form-control'])}}
	</div>

	<div class="col-sm-12 form-group @if($errors->has('event_location')) has-error @endif">
	    {{ Form::label('event_location', 'Event Location') }}
	    {{ Form::text('event_location', null, ['class' => 'form-control'] )}}
    </div>


    <div class="col-sm-6 form-group @if($errors->has('event_start')) has-error @endif">
        {{ Form::label('event_start', 'Event Start') }}
        {{ Form::text('event_start', null, ['class' => 'form-control', 'id' => 'datetimepicker', 'readonly'])}}
    </div>

        <div class="col-sm-6 form-group @if($errors->has('event_end')) has-error @endif">
        {{ Form::label('event_end', 'Event End') }}
        {{ Form::text('event_end', null, ['class' => 'form-control', 'id' => 'datetimepicker2', 'readonly'])}}
    </div>

    <div class="col-sm-6 form-group @if($errors->has('img_url')) has-error @endif">
        {{ Form::label('img_url', 'IMG') }}
        {{ Form::file('img_url', null, ['class' => 'form-control'])}}
    </div>


	<div>
		<button class="btn btn-primary pull-left"> Create Event </button>
	</div>
	
</div>