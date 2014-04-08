<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders_packages', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->integer('order_id')->unsigned();
		    $table->integer('package_id')->unsigned();
		    $table->timestamp('order_delivered_on')->nullable();	

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders_packages');
	}

}
