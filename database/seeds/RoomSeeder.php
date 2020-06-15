<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<10; $i++){
            DB::table('rooms')->insert([
                'name' => $faker->catchPhrase,
                'image' => "https://top10tphcm.com/wp-content/uploads/2020/05/van-phong-cho-thue-binh-thanh-696x471.jpg",
                'typeroom' => $faker->randomNumber(1),
                'number' => $faker->randomNumber(2),
                'area' => $faker->randomNumber(2),
                'price' => $faker->randomNumber(6),
            ]);
        }
    }
}
