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
	 * Defines relationship that package belongs to order (author)
	 */
	public function order()
	{
		return $this->belongsTo('Order');
	}

	/**
	 * Defines relationship that package belong to many package types
	 */

	public function packageType()
	{
		return $this->hasMany('PackageType');
	}
}