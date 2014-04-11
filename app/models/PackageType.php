<?php

use Carbon\Carbon;

class PackageType extends BaseModel {

	/**
	 * Defines posts table
	 */
    protected $table = 'package_types';

	/**
	 * Defines rules for orders table
	 */
	public static $rules = array(
	    
	);

	public function package()
	{
		return $this->hasMany('Package');
	}
}