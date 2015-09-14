
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
						<select class="form-control" id="state" name="state">
							<option value="">N/A</option>
							<option value="AK">Alaska</option>
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="AZ">Arizona</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DC">District of Columbia</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="IA">Iowa</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MA">Massachusetts</option>
							<option value="MD">Maryland</option>
							<option value="ME">Maine</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MO">Missouri</option>
							<option value="MS">Mississippi</option>
							<option value="MT">Montana</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="NE">Nebraska</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NV">Nevada</option>
							<option value="NY">New York</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="PR">Puerto Rico</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VA">Virginia</option>
							<option value="VT">Vermont</option>
							<option value="WA">Washington</option>
							<option value="WI">Wisconsin</option>
							<option value="WV">West Virginia</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
                    <div class="col-md-5">
                        {{ Form::label('state', 'Time Zone') }}
                        <select id="time_zone" name="time_zone" class="form-control">
                            @foreach ($tz as $timezone)

                                <option value="{{ $timezone['zone'] }}">{{ $timezone['diff_from_GMT'] }} {{ $timezone['zone'] }} (Now: {{ $current_date_time }})</option>


                            @endforeach

                            <?php //echo $timezone_options; ?>
                        </select>
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

			<button class="btn btn-lrg btn-primary">Submit</button>
	</div>