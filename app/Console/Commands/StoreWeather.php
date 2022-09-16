<?php

namespace App\Console\Commands;

use App\Models\City;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class StoreWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:weather';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store the information about the weather in cities to the database';


    public function handle(): int
    {
        $cities = DB::table('cities')->get();
        $weather = new OpenWeather();
        $units = 'metric';
        foreach ($cities as $city) {
            $city = $city->city_name;
            $current = $weather->getCurrentWeatherByCityName($city, $units);

            DB::table('weather')->insert([
                'time'              => date('Y-m-d H:i:s', $current['datetime']['timestamp']),
                'name'              => $city,
                'weather_latitude'  => $current['location']['latitude'],
                'weather_longitude' => $current['location']['longitude'],
                'temperature'       => $current['forecast']['temp'],
                'pressure'          => $current['forecast']['pressure'],
                'humidity'          => $current['forecast']['humidity'],
                'temperature_min'   => $current['forecast']['temp_min'],
                'temperature_max'   => $current['forecast']['temp_max']
            ]);
        }
        return 0;
    }
}
