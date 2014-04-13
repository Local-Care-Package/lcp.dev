<?php

use Carbon\Carbon;

class PackageType extends BaseModel {

	/**
	 * Defines posts table
	 */
    protected $table = 'package_types';

    protected $softDelete = true;

	/**
	 * Defines rules for orders table
	 */
	public static $rules = array(
	    
	);

	public function order()
	{
		return $this->hasMany('Order');
	}
}