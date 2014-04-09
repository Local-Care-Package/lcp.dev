<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRecipientToOrdersPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders_packages', function($table)
		{
			$table->string('recipient', 100);  
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders_packages', function($table)
		{
			$table->dropColumn('recipient'); 
		});
	}

}
