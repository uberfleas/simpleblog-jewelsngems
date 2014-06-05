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

//Login Route
Route::any("/users", array(
	"as"	=> "users/login",
	"uses"	=> "UserController@loginAction"
));

Route::get('/', function()
{
	return View::make('home');
});

Route::resource('users', 'UserController');