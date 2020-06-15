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
                'image' => "public/feVDnbIgzR5tn9iWMwpOPlQ9JettlS2VwylaDykJ.jpeg",
                'typeroom' => $faker->randomNumber(1),
                'number' => $faker->randomNumber(2),
                'area' => $faker->randomNumber(2),
                'price' => $faker->randomNumber(6),
            ]);
        }
    }
}
