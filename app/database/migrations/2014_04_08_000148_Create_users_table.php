<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

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
		    $table->string('password', 100);  			// Need to hash this... see blog.dev
		    $table->string('first_name', 100);
		    $table->string('last_name', 100);
		    $table->string('phone', 100);     			// Open quesiton.  Format String/Integer/ETC?????
		    $table->string('stripe_customer_token',100); // Potential Validation?
		    $table->boolean('isAdmin');					// False for customers, true otherwise
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
		Schema::drop('users');
	}

}
