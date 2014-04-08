<?php
class OrderTableSeeder extends DatabaseSeeder {
 
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        DB::table('users')->delete();

        $order1 = new Order();
        $order1->user_id = 2;
        $order1->street = '123 Alamo Street';
        $order1->city = 'San Antonio';
        $order1->state = 'TX';
        $order1->zip = '78245';
        $order1->stripe_transaction_token = 'lalalallalallalallal';
        $order1->save();

    }

}