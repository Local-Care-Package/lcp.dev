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

        $user = new User();
        $user->email = 'admin@lcp.com';
        $user->password = 'password';
        $user->first_name = 'Admin';
        $user->last_name = 'Admin';
        $user->isAdmin = 1;
        $user->id = 1;
        $user->phone = '2106931774';
        $user->save();

        $user2 = new User();
        $user2->email = 'customer@gmail.com';
        $user2->password = 'buystuff';
        $user2->first_name = 'John';
        $user2->last_name = 'Doe';
        $user2->isAdmin = 0;
        $user2->id = 2;
        $user2->phone = '2106931774';
        $user2->save();
    }

}