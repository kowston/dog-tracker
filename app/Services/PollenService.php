<?php
namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class PollenService
{
    public function get($lat, $lon)
    {
        $response = Http::withHeaders([
                'x-api-key' => '2b0c0f64ff24a23ac13ec17352f2594a3a86afc12acde36d51d3008ecb662d9b'
            ])
            ->get("https://api.ambeedata.com/latest/by-lat-lng?lat=$lat&lng=$lon");

        $data = $response->json('stations');

        //using Laravel's ARR helper class get the first row of array so you don't need to do $pollenData[0]['column']
        return Arr::first($data);

        /*
         * array:17 [▼ // app/Http/Controllers/DogTrackerController.php:17
          "CO" => 0.201
          "NO2" => 9.111
          "OZONE" => 34.923
          "PM10" => 40.6
          "PM25" => 9.077
          "SO2" => 0.355
          "city" => "New York"
          "countryCode" => "US"
          "division" => "New York"
          "lat" => 40.7139
          "lng" => -74.007
          "placeName" => "Broadway"
          "postalCode" => "10007-0052"
          "state" => "New York"
          "updatedAt" => "2023-10-02T19:00:00.000Z"
          "AQI" => 38
          "aqiInfo" => array:3 [▼
            "pollutant" => "PM10"
            "concentration" => 40.6
            "category" => "Good"
          ]
        ]
         */
    }
}
