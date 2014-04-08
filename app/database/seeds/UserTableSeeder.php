<?php
class UserTableSeeder extends DatabaseSeeder {
 
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        DB::table('users')->delete();
        
        $user2 = new User();
        $user2->id = 2;
        $user2->email = 'customer@gmail.com';
        $user2->password = 'buystuff';
        $user2->first_name = 'John';
        $user2->last_name = 'Doe';
        $user2->phone = '2106931774';
        $user2->stripe_customer_token = 'thesearenotthedroidsyouarelookingfor';
        $user2->isAdmin = false;
        $user2->save();

        $user = new User();
        $user->id = 1;
        $user->email = 'admin@lcp.com';
        $user->password = 'password';
        $user->first_name = 'Admin';
        $user->last_name = 'Admin';
        $user->phone = '2106931774';
        $user->stripe_customer_token = 'hihohihoitsofftowotkwego';
        $user->isAdmin = true;
        $user->save();

    }

}