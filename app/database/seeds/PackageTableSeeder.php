<?php
class PackageTableSeeder extends DatabaseSeeder {
 
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        DB::table('packages')->delete();

        $package1 = new Package();
        $package1->id = 1;
        $package1->description = 'Small Package';
        $package1->sale_price_USD = 25.00;
        $package1->save();

        $package2 = new Package();
        $package2->id = 2;
        $package2->description = 'Medium Package';
        $package2->sale_price_USD = 50.00;
        $package2->save();

        $package3 = new Package();
        $package3->id = 3;
        $package3->description = 'Large Package';
        $package3->sale_price_USD = 75.00;
        $package3->save();

    }

}