<?php

class OrderTableSeeder extends DatabaseSeeder
{
    public function run()
    {

        $faker = $this->getFaker();
        for ($i = 1; $i < 11; $i++)
        {
          $order = Order::create(array(
            'id' => "$i",
            'user_id' => $faker->randomNumber(2, 10),
            'recipient_name' => $faker->name,
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->stateAbbr,
            'zip' => $faker->postcode,
            'gift_message' => $faker->sentence($nbWords = 6),
            'stripe_transaction_token' => $faker->md5
          ));
        }
    }
}