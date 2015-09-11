

    <div class="form-group @if($errors->has('username')) has-error @endif">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group @if($errors->has('password')) has-error @endif">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['class' => 'form-control'])}}
    </div>

    <div>
        <button class="btn btn-primary btn-block"> Sign In </button>
    </div>
    
