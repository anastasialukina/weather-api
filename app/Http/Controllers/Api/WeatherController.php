<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Weather;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class WeatherController extends BaseController
{
    public function index()
    {
        return Weather::all();
    }

    public function show($city)
    {
        $weather = Weather::where('name', $city)->get();
        if ($weather->isEmpty())
        {
            return $this->sendError('Forecast not found',
                'Forecast for that city does not exists');
        }
        return $weather;
    }
}
