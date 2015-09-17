
			<div class="form-group @if($errors->has('username')) has-error @endif">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', null, ['class' => 'form-control'])}}
            </div>

			<div class="form-group @if($errors->has('first_name')) has-error @endif">
                {{ Form::label('first_name', 'First Name') }}
                {{ Form::text('first_name', null, ['class' => 'form-control'])}}
            </div>
            
            <div class="form-group @if($errors->has('last_name')) has-error @endif">
                {{ Form::label('last_name', 'Last Name') }}
                {{ Form::text('last_name', null, ['class' => 'form-control'])}}
            </div>

			<div class="form-group @if($errors->has('email')) has-error @endif">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control'])}}
            </div>

			<div class="form-group @if($errors->has('password')) has-error @endif">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', ['class' => 'form-control'])}}
            </div>
			
            <div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
                {{ Form::label('password_confirmation', 'Re-enter Password') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control'])}}
            </div>

			<div class="form-group @if($errors->has('address')) has-error @endif">
                {{ Form::label('address', 'Address') }}
                {{ Form::text('address', null, ['class' => 'form-control'])}}
            </div>
				
			<div class="form-group @if($errors->has('city')) has-error @endif">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, ['class' => 'form-control'])}}
            </div>

			<div class="row">
            <div class="form-group @if($errors->has('state')) has-error @endif">
					<div class="col-sm-5">
                    {{ Form::label('state', 'State') }}
					{{ $state }}
					</div>
                    <div class="col-md-5">
                        {{ Form::label('time_zone', 'Time Zone') }}
                        {{ $time_zone }}
                    </div>
				</div>
			</div>

            <div class="form-group @if($errors->has('zip_code')) has-error @endif">
                {{ Form::label('zip_code', 'Zip Code') }}
                {{ Form::text('zip_code', null, ['class' => 'form-control'])}}
            </div>
			
			<div class="form-group @if($errors->has('phone_number')) has-error @endif">
                {{ Form::label('phone_number', 'Phone Number') }}
                {{ Form::text('phone_number', null, ['class' => 'form-control'])}}
            </div>
            <div class="col-sm-6 form-group @if($errors->has('profile_img_url')) has-error @endif">
                {{ Form::label('profile_img_url', 'Profile Image') }}
                {{ Form::file('profile_img_url')}}
            </div>
			<button class="btn btn-lrg btn-primary btn-block">Submit</button>
	</div>