<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');	// Turn off foreign key constraint for seeding
		$this->call('PackageTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('OrderTableSeeder');
		$this->call('OrdersPackagesTableSeeder');
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');	// Turn on foreign key constraint after seeding
	}

}