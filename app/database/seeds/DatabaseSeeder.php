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

		$this->call('PackageTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('OrderTableSeeder');
		// $this->call('OrdersPackagesTableSeeder');
	}

}