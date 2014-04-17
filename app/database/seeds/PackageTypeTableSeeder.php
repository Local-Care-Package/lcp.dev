<?php

class PackageTypeTableSeeder extends DatabaseSeeder
{
    public function run()
    {
          // Create the three basic package types to be seeded in the database
          $packageType1 = new PackageType;
          $packageType1->description = 'Standard Package';
          $packageType1->price = 25.00;
          $packageType1->save();

          $packageType2 = new PackageType;
          $packageType2->description = 'Premium Package';
          $packageType2->price = 45.00;
          $packageType2->save();

          $packageType3 = new PackageType;
          $packageType3->description = 'Grand Package';
          $packageType3->price = 65.00;
          $packageType3->save();

    }
}