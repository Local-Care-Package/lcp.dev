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

		Schema::create('Users', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->string('email', 200)->unique();
		    $table->string('password', 100);  			
		    $table->string('first_name', 100);
		    $table->string('last_name', 100);
		    $table->string('phone', 15)->nullable();     			
		    $table->string('stripe_customer_token',100)->nullable();
		    $table->boolean('isAdmin');					
		    $table->timestamps();		
		});

		Schema::create('Orders', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('Users');
		    $table->string('street', 100);
		    $table->string('city', 100);
		    $table->string('state', 100);
		    $table->string('zip', 10);   				
		    $table->string('stripe_transaction_token', 100);	
		    $table->timestamps();
		});

		Schema::create('PackageType', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->string('description', 200);
		    $table->decimal('sale_price_USD', 5, 2);
		    $table->timestamps();

		});
		
		Schema::create('Packages', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->integer('order_id')->unsigned();
		    $table->foreign('order_id')->references('id')->on('Orders');
		    $table->integer('type_id')->unsigned()->references('id')->on('PackageType');
			$table->foreign('type_id')->references('id')->on('PackageType');
			$table->string('recipient', 100);
		    $table->string('street', 100);
		    $table->string('city', 100);
		    $table->string('state', 100);
		    $table->string('zip', 10);  
			$table->string('message', 250);
			$table->timestamp('packaged_on')->nullable(); 
		    $table->timestamp('delivered_on')->nullable();
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
		Schema::table('Packages', function($table)
		{
			$table->dropForeign('Packages_order_id_foreign');
			$table->dropForeign('Packages_type_id_foreign');
		});

		Schema::table('Orders', function($table)
		{
			$table->dropForeign('Orders_user_id_foreign');
		});

		Schema::drop('PackageType');
		Schema::drop('Packages');
		Schema::drop('Orders');
		Schema::drop('Users');
	}

}
