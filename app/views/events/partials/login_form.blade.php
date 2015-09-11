

    <div class="form-group @if($errors->has('user_name')) has-error @endif">
        {{ Form::label('user_name', 'User Name') }}
        {{ Form::text('user_name', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group @if($errors->has('password')) has-error @endif">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['class' => 'form-control'])}}
    </div>

    <div>
        <button class="btn btn-primary btn-block"> Sign In </button>
    </div>
    
