<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesReferenceTable extends Migration {

	/**
	 * Run the migrations. Create packages reference tables.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function($table)
		{
		    $table->increments('id')->unsigned();
		    $table->string('description', 200);
		    $table->decimal('sale_price_USD', 5, 2);
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
		Schema::drop('packages');
	}

}
