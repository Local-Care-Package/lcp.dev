<?php

class PackageTypeTableSeeder extends DatabaseSeeder
{
    public function run()
    {

        $faker = $this->getFaker();
        for ($i = 1; $i < 4; $i++)
        {
          $packageType = PackageType::create(array(
            'id' => "$i",
            'description' => $faker->sentence($nbWords = 6),
            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100)
          ));
        }
    }
}