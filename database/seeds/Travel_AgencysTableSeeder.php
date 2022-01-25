<?php

use Faker\Generator as Faker;
use App\Travel_Agency;
use Illuminate\Database\Seeder;


class Travel_AgencysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $new_holiday = new Travel_Agency();
            $new_holiday->city = $faker->city();
            $new_holiday->state = $faker->state();
            $new_holiday->fly = 'Ryanair';
            $new_holiday->hotel = 'Royal Palace';
            $new_holiday->fly_price = $faker->numberBetween(100,1000);
            $new_holiday->hotel_price =
            $faker->numberBetween(100, 1000);
            $new_holiday->description = $faker->text(20);
            $new_holiday->save();
        }
        
    }
}
