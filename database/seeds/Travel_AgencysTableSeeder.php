<?php

use App\Travel_Agency;
use Illuminate\Database\Seeder;


class Travel_AgencysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_holiday = new Travel_Agency();
        $new_holiday->city = 'Londra';
        $new_holiday->state = 'UK';
        $new_holiday->fly = 'Ryanair';
        $new_holiday->hotel = 'Royal Palace';
        $new_holiday->fly_price = 200;
        $new_holiday->hotel_price = 300;
        $new_holiday->description = 'Una delle città piu belle al mondo';
        $new_holiday->save();
    }
}
