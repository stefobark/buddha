<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	 $users = User::all();

    return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::all();
    	return View::make('users.create')->with('users', $users);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->age = Input::get('age');
		$user->id = Input::get('id');
		
		//new guzzle client
		$client = new \GuzzleHttp\Client();
			 
	 	//build string for get request to geocoder using form info
	 	if (!empty(Input::get('address'))) {
	 		$get_this = "street=" . str_replace(' ', '+', Input::get('address'));
	 	}
	 	
	 	if (!empty(Input::get('city'))) {
		  $get_this .= "&city=" . Input::get('city');
	 	}
	 
	 	if (!empty(Input::get('state'))) {
		  $get_this .= "&state=" . Input::get('state');
	 	}
	 
	 	if (!empty(Input::get('zip'))) {
		  $get_this .= "&zip=" . Input::get('zip');
	 	}
	 	
		//then, add this stuff to the end of the string
	 	$get_this .= "&benchmark=Public_AR_Census2010&format=json";
			 		 
		//now, send the string to geocoder
		$request = $client->get("http://geocoding.geo.census.gov/geocoder/locations/address?$get_this");
		
		//turn the stream into json output
		$json = $request->json();
		
		//now, pull out the good stuff (lat/long) from the array
		$long = $json["result"]["addressMatches"][0]["coordinates"]["x"];
		$lat = $json["result"]["addressMatches"][0]["coordinates"]["y"];
		
		//store it for this user, in case we want to use it later for other stuff
		$user->lat_long = "$lat , $long";
		
		//now, hit the shapefile/mysql table with the long/lat and get their district
		$get_leg = DB::select(DB::raw("select sldlst from tl_2014_53_sldl where ST_CONTAINS(shape, POINT($long, $lat))"));
		
		$f_leg = $get_leg[0]->sldlst;
		
		//if it starts with 0, get rid of the 0 because there are no 0's in our data set
		if(0 === strpos($get_leg[0]->sldlst, '0')){
			$f_leg = substr($f_leg, 1);
			}
		
		//store the leg district with the user
		$user->leg_district = $f_leg;
		
		//save all that stuff (insert)		 
		$user->save();
		
		//pass to the user's profile view.
		return Redirect::action('UsersController@showLogin');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$id = Auth::user()->id;
		$user = User::findOrFail($id);
		
		$q = SphinxQL::raw("select json.leg_id leg_id, json.first_name, json.last_name, json.email, json.office_phone from rt_legs where json.district = $user->leg_district");
		
		foreach($q as $id){
		$f_id[] = $id["leg_id"];
		}
		
		$h1 = SphinxQL::raw("select json.id AS b_id, json['versions'][0]['name'] AS name, json['title'] AS title, json['versions'][0]['url'] AS url1, json['sources'][0]['url'] AS url2, json['subjects'] AS subjects from rt_u_bills where json['sponsors'][0]['leg_id']='$f_id[0]'");
		$h2 = SphinxQL::raw("select json.id AS b_id, json['versions'][0]['name'] AS name, json['title'] AS title, json['versions'][0]['url'] AS url1, json['sources'][0]['url'] AS url2, json['subjects'] AS subjects from rt_l_bills where json['sponsors'][0]['leg_id']='$f_id[1]'");
		$s = SphinxQL::raw("select json.id AS b_id, json['versions'][0]['name'] AS name, json['title'] AS title, json['versions'][0]['url'] AS url1, json['sources'][0]['url'] AS url2, json['subjects'] AS subjects from rt_l_bills where json['sponsors'][0]['leg_id']='$f_id[2]'");
		
		return View::make('users.show', array('f_id' => $f_id, 'user' => $user, 'q' => $q, 'h1' => $h1, 'h2' => $h2, 's' => $s));
	}

	public function signOut() {

    Auth::logout();
    Session::flush();
    return Redirect::to('');

}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return View::make('users.edit', compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	public function showLogin()
	{
		// show the form
		return View::make('users.login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'username' => 'required' ,//username
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'username' => Input::get('username'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata, true)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::action('UsersController@show');

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

		}
	}
	

}
