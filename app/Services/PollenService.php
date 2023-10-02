<?php
namespace App\Services;

use GuzzleHttp\Client;

class PollenService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.breezometer.com/']);
        $this->apiKey = '2b0c0f64ff24a23ac13ec17352f2594a3a86afc12acde36d51d3008ecb662d9b';
    }

    public function getPollenData($lat, $lon)
    {
        $response = $this->client->request('GET', 'pollen/v2/forecast/daily', [
            'query' => [
                'lat' => $lat,
                'lon' => $lon,
                'key' => $this->apiKey
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
