<?php

namespace App\Http\Controllers\Api;

use Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;

class CityController extends BaseController
{
    public function index()
    {
        return City::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city_name' => 'required',
            'latitude'  => 'required|numeric',
            'longitude' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $validated = $validator->validated();
        $city = City::create($validated);

        return $this->sendResponse(new CityResource($city), 'City created successfully.');
    }
}
