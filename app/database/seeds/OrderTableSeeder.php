<?php

class OrderTableSeeder extends DatabaseSeeder
{
    public function run()
    {

        $faker = $this->getFaker();
        // Create 50 fake records that have been ordered, packaged and delivered
        for ($i = 1; $i < 50; $i++)
        {
          $order = Order::create(array(
            'id' => "$i",
            'user_id' => "$i+1",
            'package_type_id' => $faker->randomNumber(1, 3),
            'recipient_name' => $faker->name,
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->stateAbbr,
            'zip' => $faker->postcode,
            'gift_message' => $faker->sentence($nbWords = 10),
            'stripe_transaction_token' => "ch_".$faker->md5,
            'created_at' => $faker->dateTimeBetween($startDate = '-12 weeks', $endDate = '-10 weeks')->format('Y-m-d H:i:s'),
            'packaged_at' => $faker->dateTimeBetween($startDate = '-10 weeks', $endDate = '-8 weeks')->format('Y-m-d H:i:s'),
            'delivered_at' => $faker->dateTimeBetween($startDate = '-8 weeks', $endDate = '-6 weeks')->format('Y-m-d H:i:s')
          ));
        }
        for ($i = 51; $i < 96; $i++)
        {
          // Create 50 fake records that have been ordered and packaged
          $order = Order::create(array(
            'id' => "$i",
            'user_id' => $faker->randomNumber(2, 50),
            'package_type_id' => $faker->randomNumber(1, 3),
            'recipient_name' => $faker->name,
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->stateAbbr,
            'zip' => $faker->postcode,
            'gift_message' => $faker->sentence($nbWords = 10),
            'stripe_transaction_token' => "ch_".$faker->md5,
            'created_at' => $faker->dateTimeBetween($startDate = '-9 weeks', $endDate = '-6 weeks')->format('Y-m-d H:i:s'),
            'packaged_at' => $faker->dateTimeBetween($startDate = '-6 weeks', $endDate = '-3 weeks')->format('Y-m-d H:i:s')
          ));
        }

        for ($i = 97; $i < 122; $i++)
        {
          // Create 50 fake records that have been ordered
          $order = Order::create(array(
            'id' => "$i",
            'user_id' => $faker->randomNumber(2, 50),
            'package_type_id' => $faker->randomNumber(1, 3),
            'recipient_name' => $faker->name,
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->stateAbbr,
            'zip' => $faker->postcode,
            'gift_message' => $faker->sentence($nbWords = 10),
            'stripe_transaction_token' => "ch_".$faker->md5,
            'created_at' => $faker->dateTimeBetween($startDate = '-6 weeks', $endDate = 'now')->format('Y-m-d H:i:s')
          ));
        }
    }
}