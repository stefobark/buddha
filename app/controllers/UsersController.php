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
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		
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
		$fourTruth = new fourTruth;
		$fourTruth->uid = $id;
		$rand = rand(0,422);
		$rand1 = rand(-3,3);
		$fourTruth->one = $rand1;
			if($rand1 < 0){
				$rand1 = "neg".$rand1;
				}
		$rand2 = rand(-3,3);
		$fourTruth->two = $rand2;
		if($rand2 < 0){
				$rand2 = "neg".$rand2;
				}
		$rand3 = rand(-3,3);
		$fourTruth->three = $rand3;
		if($rand3 < 0){
				$rand3 = "neg".$rand3;
				}
		$rand4 = rand(-3,3);
		$fourTruth->four = $rand4;
		if($rand4 < 0){
				$rand4 = "neg".$rand4;
				}
		$dhamma = DB::table('dhammapadas')->where('id', "$rand")->get();
		$fourTruth->save();
		
		$oneAvg = DB::raw("select avg(one) from four_truths where uid=$id");
		
		return View::make('users.show', array('user' => $user, 'dhamma' => $dhamma, 'rand1' => $rand1, 'rand2' => $rand2, 'rand3' => $rand3, 'rand4' => $rand4, 'oneAvg' => $oneAvg));
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
