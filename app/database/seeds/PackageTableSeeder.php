<?php

class PackageTableSeeder extends DatabaseSeeder
{
    public function run()
    {

        $faker = $this->getFaker();
        for ($i = 1; $i < 15; $i++)
        {
          $packageType = Package::create(array(
            'id' => "$i",
            'description' => $faker->sentence($nbWords = 6),
            'package_type_id' => $faker->randomNumber(1, 3),
            'order_id' => $faker->randomNumber(1, 10)

          ));
        }
    }
}