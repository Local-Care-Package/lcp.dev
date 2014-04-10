<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Carbon\Carbon;

class User extends BaseModel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Defines rules for user table
	 */
	public static $rules = array(
	    'first_name' => 'required|max:100',
    	'last_name'  => 'required|max:100',
    	'email' => 'required|email|unique:users',
    	'password' => 'required|min:8|confirmed',
    	'password_confirmation' => 'min:8'
	);

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

	/**
	 * Defining the one to many relationship between user and orders
	 *
	 * @var array
	 */
	public function orders()
	{
		return $this->hasMany('Order');
	}

}