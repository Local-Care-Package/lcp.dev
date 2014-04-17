<?php

class UserTableSeeder extends DatabaseSeeder
{
    public function run()
    {
        // Create admin@lcp-app.com user
        $admin = new User;
        $admin->id = 1;
        $admin->email = 'admin@lcp-app.com';
        $admin->password = "password";
        $admin->first_name = "Local Care Package";
        $admin->last_name = "Administrative User";
        $admin->phone = "210-457-1232";
        $admin->stripe_customer_token = "ADMIN NO CUSTOMER TOKEN";
        $admin->is_admin = true;
        $admin->save();

        // Create 50 fake customers
        $faker = $this->getFaker();
        for ($i = 0; $i < 50; $i++)
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