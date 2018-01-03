<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      {

        $faker = Faker\Factory::create('lt_LT');

  //      for ($i = 0; $i < 10; $i++) {
    //      $product = new \App\Product();
    //      $product->name = str_random(10);
    //      $product->price = random_int(1,100);

    //      $product->save();
    //    }

    //  }
        $data = [];

        for($i = 0; $i < 10; $i++) {

          $data[] = [
            //'name' => $faker->word, ir taip galima
            //'name' => $faker->words(3, true),
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make('labas')
          ];
  }


        // php artisan db:seed --class=ProductsSeeder (Git)
        DB::table('users')->insert($data);



  }
    }
}
