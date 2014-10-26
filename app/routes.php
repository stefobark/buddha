<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('users', 'UsersController');

// route to show the login form
	Route::get('login', array('uses' => 'UsersController@showLogin'));

	// route to process the form
Route::post('login', array('uses' => 'UsersController@doLogin'));

Route::get('signout', array('uses' => 'UsersController@signOut'));

Route::get('/', function()
{
	
    return View::make('home');
});

Route::get('committees', function()
{
	echo '<pre>';
	$q = SphinxQL::raw('select json.id, json.committee, json.updated_at from rt_committees group by json.id order by json.updated_at ASC');
	foreach ($q as $qq){
	echo "ID: " . $qq['json.id'] . "  Name: " . $qq['json.id'] . "  Updated: " . $qq['json.updated_at'] . "<br />";
	}
	echo '</pre>';
});
