<?php

class DatabaseSeeder extends Seeder {

	protected $faker;
	
	public function getFaker()
	{
	    if (empty($this->faker))
	    {
	      $this->faker = Faker\Factory::create();
	    }
	    return $this->faker;
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');	// Turn off foreign key constraint for seeding
		$this->call('UserTableSeeder');
		$this->call('PackageTypeTableSeeder');
		$this->call('OrderTableSeeder');
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');	// Turn on foreign key constraint after seeding
	}

}