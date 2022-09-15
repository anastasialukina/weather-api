<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'name'              => $this->name,
            'time'              => $this->time,
            'weather_latitude'  => $this->weather_latitude,
            'weather_longitude' => $this->weather_longitude,
            'temperature'       => $this->temperature,
            'pressure'          => $this->pressure,
            'humidity'          => $this->humidity,
            'temperature_min'   => $this->temperature_min,
            'temperature_max'   => $this->temperature_max
        ];
    }
}
