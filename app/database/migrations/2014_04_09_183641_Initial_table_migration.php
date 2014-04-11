<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialTableMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('users', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->string('email', 200)->unique();
		    $table->string('password', 100);  			
		    $table->string('first_name', 100);
		    $table->string('last_name', 100);
		    $table->string('phone', 15)->nullable();     			
		    $table->string('stripe_customer_token',100)->nullable();
		    $table->boolean('is_admin');					
		    $table->timestamps();		
		});

		Schema::create('orders', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
		    $table->string('recipient_name', 100);
		    $table->string('street', 100);
		    $table->string('city', 100);
		    $table->string('state', 100);
		    $table->string('zip', 10); 				
		    $table->string('gift_message');  				
		    $table->string('stripe_transaction_token', 100);	
		    $table->timestamps();
		});

		Schema::create('package_types', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->string('description', 200);
		    $table->decimal('price', 5, 2);
		    $table->timestamps();

		});

		Schema::create('packages', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->string('description', 200);
		    $table->integer('order_id')->unsigned();
		    $table->foreign('order_id')->references('id')->on('orders');
		    $table->integer('package_type_id')->unsigned()->references('id')->on('package_types');
			$table->foreign('package_type_id')->references('id')->on('package_types');
			$table->timestamp('packaged_at')->nullable(); 
		    $table->timestamp('delivered_at')->nullable();
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
		Schema::table('packages', function($table)
		{
			$table->dropForeign('packages_order_id_foreign');
			$table->dropForeign('packages_package_type_id_foreign');
		});

		Schema::table('orders', function($table)
		{
			$table->dropForeign('orders_user_id_foreign');
		});

		Schema::drop('package_types');
		Schema::drop('packages');
		Schema::drop('orders');
		Schema::drop('users');
	}

}
