<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = CalendarEvent::where('user_id', '=', Auth::id())->get();
		return View::make('users.profile', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$timezones = $this->tz_list();
		
		$time_zone = Form::select('time_zone', $timezones,null,['class' => 'form-control']);

		$states = $this->state_list();
		
		$state = Form::select('state', $states, null,['class' => 'form-control']);

		return View::make('users.create_user', compact('time_zone', 'state'));

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Input::hasFile('profile_img_url')){
			$file = Input::file('profile_img_url');
			$destinationPath = public_path() . '/img';
			$filename = $file->getClientOriginalName();
			Input::file('profile_img_url')->move($destinationPath, $filename);

			$user = new User();
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip_code = Input::get('zip_code');
			$user->phone = Input::get('phone_number');
			$user->profile_img_url = $filename; 
			$user->time_zone = Input::get('time_zone');
			$user->save();


			Session::flash('successMessage', 'Account created successfully! You may now login.');
			return Redirect::action('HomeController@showWelcome');
		}else{
			$user = new User();
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip_code = Input::get('zip_code');
			$user->phone = Input::get('phone_number');
			$user->time_zone = Input::get('time_zone');
			$user->save();


			Session::flash('successMessage', 'Account created successfully! You may now login.');
			return Redirect::action('HomeController@showWelcome');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$events = CalendarEvent::where('user_id', '=', $id)->get();
		$user = User::find($id);
		return View::make('users.otherProfile', compact('events', 'user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		$timezones = $this->tz_list();
		
		$time_zone = Form::select('time_zone', $timezones, $user->time_zone,['class' => 'form-control']);

		$states = $this->state_list();
		
		$state = Form::select('state', $states, $user->state,['class' => 'form-control']);

		return View::make('users.editProfile', compact('time_zone', 'state'))->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);
        if(!$user) {

            Session::flash('errorMessage', "User with id of $id is not found"); 

            App::abort(404);  
        }elseif($user->id == Auth::user()->id){
            if(Input::hasFile('profile_img_url')){
				$file = Input::file('profile_img_url');
				$destinationPath = public_path() . '/img';
				$filename = $file->getClientOriginalName();
				Input::file('profile_img_url')->move($destinationPath, $filename);

				$user->password = Input::get('password');
				$user->email = Input::get('email');
				$user->first_name = Input::get('first_name');
				$user->last_name = Input::get('last_name');
				$user->username = Input::get('username');
				$user->address = Input::get('address');
				$user->city = Input::get('city');
				$user->state = Input::get('state');
				$user->zip_code = Input::get('zip_code');
				$user->phone = Input::get('phone');
				$user->profile_img_url = $filename; 
				$user->time_zone = Input::get('time_zone');

				$user->save();

			}else{
				$user->password = Input::get('password');
				$user->email = Input::get('email');
				$user->first_name = Input::get('first_name');
				$user->last_name = Input::get('last_name');
				$user->username = Input::get('username');
				$user->address = Input::get('address');
				$user->city = Input::get('city');
				$user->state = Input::get('state');
				$user->zip_code = Input::get('zip_code');
				$user->phone = Input::get('phone');
				$user->time_zone = Input::get('time_zone');

				$user->save();
				
				Session::flash('successMessage', 'Account updated successfully!');
				return Redirect::action('UsersController@index');
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function tz_list() {
		$zones_array = array();
		$timestamp = time();
		$zones_array[''] = 'Select Timezone...';
		foreach(timezone_identifiers_list() as $key => $zone) {
		    date_default_timezone_set($zone);
		    $current_date_time = date("h:i A T",time());
		    $zones_array[$zone] = 'GMT ' . date('P', $timestamp) . $zone . ' (Now: ' . $current_date_time . ')';
		}
	  return $zones_array;
	}



	public function state_list()
	{

		$states = array(
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
                    );
		return $states;
                    
	}

}