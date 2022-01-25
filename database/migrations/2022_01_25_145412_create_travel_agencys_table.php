<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelAgencysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_agencys', function (Blueprint $table) {
            $table->id();
            $table->string('city',20);
            $table->string('state', 20);
            $table->string('fly', 20);
            $table->string('hotel', 50);
            $table->smallInteger('fly_price')->unsigned();
            $table->smallInteger('hotel_price')->unsigned();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_agencys');
    }
}
