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
	$posts = Post::idDescending()->paginate(3);

	return View::make('home')
		->with('posts',$posts);
});

Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::post('/contact', array("uses" => "ContactController@submitAction"));