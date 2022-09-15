<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->timestamp('time');
            $table->string('name');
            $table->float('weather_latitude');
            $table->float('weather_longitude');
            $table->float('temperature');
            $table->unsignedInteger('pressure');
            $table->unsignedInteger('humidity');
            $table->float('temperature_min');
            $table->float('temperature_max');
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
        Schema::dropIfExists('weather');
    }
};
