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

	public function packageType()
	{
		return $this->hasOne('PackageType');
	}

	public function order()
	{
		return $this->belongsToMany('Order');

	}
}