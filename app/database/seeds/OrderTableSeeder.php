<?php

class OrderTableSeeder extends DatabaseSeeder
{
    public function run()
    {

        $faker = $this->getFaker();
        for ($i = 1; $i < 44; $i++)
        {
          $order = Order::create(array(
            'id' => "$i",
            'user_id' => $faker->randomNumber(2, 10),
            'package_type_id' => $faker->randomNumber(1, 3),
            'recipient_name' => $faker->name,
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->stateAbbr,
            'zip' => $faker->postcode,
            'gift_message' => $faker->sentence($nbWords = 10),
            'stripe_transaction_token' => $faker->md5
          ));
        }
    }
}