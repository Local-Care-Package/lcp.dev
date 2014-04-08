<?php

use Carbon\Carbon;

class Package extends BaseModel {

	/**
	 * Defines posts table
	 */
    protected $table = 'packages';

	/**
	 * Defines rules for packages table
	 */
	public static $rules = array(
	    
	);

	/**
	 * Defines relationship that post belongs to user (author)
	 */
	public function order()
	{
		return $this->belongsTo('Order');
	}
}