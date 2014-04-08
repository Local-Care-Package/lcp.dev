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
        $user->phone = '2106931774';
        $user->save();

        $user2 = new User();
        $user->email = 'customer@gmail.com';
        $user->password = 'buystuff';
        $user->first_name = 'John';
        $user->last_name = 'Doe';
        $user->isAdmin = 0;
        $user->phone = '2106931774';
        $user->save();
    }

}