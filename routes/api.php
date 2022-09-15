<?php

use App\Models\City;
use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/weather', [\App\Http\Controllers\Api\WeatherController::class,
    'index'])->name('api.weather');

Route::get('/cities', [\App\Http\Controllers\Api\CityController::class,
    'index'])->name('api.cities');


Route::get('/weather/{city}', [\App\Http\Controllers\Api\WeatherController::class, 'show']);
Route::post('/add', [\App\Http\Controllers\Api\CityController::class,
    'store'])->name('api.add');
