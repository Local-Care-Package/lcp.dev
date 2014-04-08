<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->string('street', 100);
		    $table->string('city', 100);
		    $table->string('state', 100);
		    $table->string('zip', 10);   				// Validation question
		    $table->timestamp('order_placed_on')->nullable();
		    $table->string('stripe_transaction_token', 100);
		    $table->timestamp('order_delivered_on')->nullable();	
		    $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
