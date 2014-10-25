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
		$user->city = Input::get('city');
		$user->state = Input::get('state');
		$user->address = Input::get('address');
		$user->zip = Input::get('zip');
		$user->age = Input::get('age');
		
		//new guzzle object
		$client = new \GuzzleHttp\Client();
			 
	 	//build string for get request using form info
	 	if (!empty($user->address)) {
	 		$get_this = "street=" . str_replace(' ', '+', $user->address);
	 	}
	 	
	 	if (!empty($user->city)) {
		  $get_this .= "&city=" . $user->city;
	 	}
	 
	 	if (!empty($user->state)) {
		  $get_this .= "&state=" . $user->state;
	 	}
	 
	 	if (!empty($user->zip)) {
		  $get_this .= "&zip=" . $user->zip;
	 	}
	 
	 	$get_this .= "&benchmark=Public_AR_Census2010&format=json";
			 		 
		 $request = $client->get("http://geocoding.geo.census.gov/geocoder/locations/address?$get_this");
		 $json = $request->json();
		 
		 $long = $json["result"]["addressMatches"][0]["coordinates"]["x"];
		 $lat = $json["result"]["addressMatches"][0]["coordinates"]["y"];
		 
		 $user->lat_long = "$lat , $long";

		$get_leg = DB::select(DB::raw("select sldlst from tl_2014_53_sldl where ST_CONTAINS(shape, POINT($long, $lat))"));
	
		$user->leg_district = $get_leg[0]->sldlst;
		 
		$user->save();
		
		return Redirect::route('users.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);
		
		return View::make('users.show', compact('user'));
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


}
