<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = array('fname','lname','email','password');

	public static $rules = array(
		'fname' 					=> 'required|alpha|min:2',
		'lname' 					=> 'required|min:2',
		'email'						=> 'required|email',
		'password'					=> 'required|alpha_num|between:6,12|confirmed',
		'password_confirmation'		=> 'required|alpha_num|between:6,12'
	);

	public static $edit_rules = array(
		'fname' 					=> 'required|alpha|min:2',
		'lname' 					=> 'required|min:2',
		'email'						=> 'required|email',
		'password'					=> 'alpha_num|between:6,12|confirmed',
		'password_confirmation'		=> 'alpha_num|between:6,12'
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	//---Database Relation Definitions
	
	public function posts() 
	{
		$this->hasMany('Post');
	}

	//---Inverse Database Relation Definitions
	
	//This added for compatability with laravel 4.1.26

	public function getRememberToken()
	{
    	return $this->remember_token;
	}

	public function setRememberToken($value)
	{
    	$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
    	return 'remember_token';
	}

}