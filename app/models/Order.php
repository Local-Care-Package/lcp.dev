<?php

use Carbon\Carbon;

class Order extends BaseModel {

	/**
	 * Defines posts table
	 */
    protected $table = 'orders';

    protected $softDelete = true;

	/**
	 * Defines rules for orders table
	 */
	public static $rules = array(
	    'recipient_name' => 'required',
    	'street'  => 'required',
    	'city' => 'required',
    	'state' => 'required',
    	'gift_message' => 'required'
	);

	/**
	 * Defines relationship that post belongs to user (author)
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

	/**
	 * Defining the one to many relationship between user and orders
	 *
	 * @var array
	 */
	public function packageType()
	{
		return $this->belongsTo('PackageType');
	}
}