<?php
class OrderPackageTableSeeder extends DatabaseSeeder {
 
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        DB::table('orders_packages')->delete();

        $OrderPackage1 = new OrderPackage();
        $OrderPackage1->order_id = 1;
        $OrderPackage1->package_id = 1;
        $OrderPackage1->save();

        $OrderPackage2 = new OrderPackage();
        $OrderPackage2->order_id = 1;
        $OrderPackage2->package_id = 1;
        $OrderPackage2->save();

        $OrderPackage3 = new OrderPackage();
        $OrderPackage3->order_id = 1;
        $OrderPackage3->package_id = 3;
        $OrderPackage3->save();
        
    }

}