<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysPackageIdAndOrderIdToAssociativeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders_packages', function($table)
		{
		    $table->integer('order_id')->unsigned();
		    $table->foreign('order_id')->references('id')->on('orders');
		    $table->integer('package_id')->unsigned();
		    $table->foreign('package_id')->references('id')->on('packages');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->dropForeign('orders_packages_order_id_foreign');
		$table->dropForeign('orders_packages_package_id_foreign');
		$table->dropColumn('order_id');
		$table->dropColumn('package_id');
	}

}
