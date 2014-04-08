<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {

	/**
	 * All passwords are hashed before being entered.
	 *
	 * 
	 */
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

}

