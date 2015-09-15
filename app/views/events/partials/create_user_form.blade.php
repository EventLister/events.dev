
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
					{{ Form::select('state',array(
                        ''=>'Select State...', 
                        'AL'=>'Alabama',
                        'AK'=>'Alaska',
                        'AZ'=>'Arizona',
                        'AR'=>'Arkansas',
                        'CA'=>'California',
                        'CO'=>'Colorado',
                        'CT'=>'Connecticut',
                        'DE'=>'Delaware',
                        'DC'=>'District of Columbia',
                        'FL'=>'Florida',
                        'GA'=>'Georgia',
                        'HI'=>'Hawaii',
                        'ID'=>'Idaho',
                        'IL'=>'Illinois',
                        'IN'=>'Indiana',
                        'IA'=>'Iowa',
                        'KS'=>'Kansas',
                        'KY'=>'Kentucky',
                        'LA'=>'Louisiana',
                        'ME'=>'Maine',
                        'MD'=>'Maryland',
                        'MA'=>'Massachusetts',
                        'MI'=>'Michigan',
                        'MN'=>'Minnesota',
                        'MS'=>'Mississippi',
                        'MO'=>'Missouri',
                        'MT'=>'Montana',
                        'NE'=>'Nebraska',
                        'NV'=>'Nevada',
                        'NH'=>'New Hampshire',
                        'NJ'=>'New Jersey',
                        'NM'=>'New Mexico',
                        'NY'=>'New York',
                        'NC'=>'North Carolina',
                        'ND'=>'North Dakota',
                        'OH'=>'Ohio',
                        'OK'=>'Oklahoma',
                        'OR'=>'Oregon',
                        'PA'=>'Pennsylvania',
                        'RI'=>'Rhode Island',
                        'SC'=>'South Carolina',
                        'SD'=>'South Dakota',
                        'TN'=>'Tennessee',
                        'TX'=>'Texas',
                        'UT'=>'Utah',
                        'VT'=>'Vermont',
                        'VA'=>'Virginia',
                        'WA'=>'Washington',
                        'WV'=>'West Virginia',
                        'WI'=>'Wisconsin',
                        'WY'=>'Wyoming',
                    ) , 
                    Input::old('state'), 
                    array(
                        'class'       => 'form-control'
                    )) }}
					</div>
                    <div class="col-md-5">
                        {{ Form::label('state', 'Time Zone') }}
                        <select id="time_zone" name="time_zone" class="form-control">
                            {{ $options }}
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

			<button class="btn btn-lrg btn-primary btn-block">Submit</button>
	</div>