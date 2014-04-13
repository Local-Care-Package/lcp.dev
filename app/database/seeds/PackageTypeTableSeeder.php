<?php

class PackageTypeTableSeeder extends DatabaseSeeder
{
    public function run()
    {

          $packageType1 = new PackageType;
          $packageType1->description = 'One good, three certificates';
          $packageType1->price = 25.00;
          $packageType1->save();

          $packageType2 = new PackageType;
          $packageType2->description = 'Two goods, four certificates';
          $packageType2->price = 45.00;
          $packageType2->save();

          $packageType3 = new PackageType;
          $packageType3->description = 'Three goods, six certificates';
          $packageType3->price = 65.00;
          $packageType3->save();

    }
}