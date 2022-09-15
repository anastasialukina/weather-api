<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'city_name' => 'Yerevan',
            'latitude' => 40.18,
            'longitude' => 44.51,
        ]);

        DB::table('cities')->insert([
            'city_name' => 'Kapan',
            'latitude' => 39.21,
            'longitude' => 46.41,
        ]);
    }
}
