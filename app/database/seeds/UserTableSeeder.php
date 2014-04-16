<?php

class UserTableSeeder extends DatabaseSeeder
{
    public function run()
    {
        $admin = new User;
        $admin->id = 1;
        $admin->email = 'admin@lcp.com';
        $admin->password = "password";
        $admin->first_name = "Local Care Package";
        $admin->last_name = "Administrative User";
        $admin->phone = "210-457-1232";
        $admin->stripe_customer_token = "4242424242424242424";
        $admin->is_admin = true;
        $admin->save();

        $admin = new User;
        $admin->id = 2;
        $admin->email = 'guest@lcp.com';
        $admin->password = "password";
        $admin->first_name = "Guest User";
        $admin->last_name = "Guest User";
        $admin->phone = "210-457-1232";
        $admin->stripe_customer_token = "8675309";
        $admin->is_admin = false;
        $admin->save();

        $faker = $this->getFaker();
        for ($i = 0; $i < 10; $i++)
        {
          $user = User::create(array(
            'email' => $faker->email,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'password' => 'password',
            'phone' => $faker->phoneNumber,
            'stripe_customer_token' => $faker->md5,
            'is_admin' => false
          ));
        }
    }
}