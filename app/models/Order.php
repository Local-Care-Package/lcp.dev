<?php

use Carbon\Carbon;

class Order extends BaseModel {

	/**
	 * Defines posts table
	 */
    protected $table = 'orders';

	/**
	 * Defines rules for orders table
	 */
	public static $rules = array(
	    
	);

	/**
	 * Defines relationship that post belongs to user (author)
	 */
	public function user()
	{
		return $this->belongsTo('user');
	}

	/**
	 * Defining the one to many relationship between user and orders
	 *
	 * @var array
	 */
	public function packages()
	{
		return $this->hasMany('packages');
	}
}