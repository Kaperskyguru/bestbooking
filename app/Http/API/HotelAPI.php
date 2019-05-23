<?php
namespace App\Http\API;

use App\Http\API\GuzzleAPIClient;
use App\Http\API\TravelPayoutAPI;

class HotelAPI
{
    private $method = 'GET';
    private $url = '';

    public function __construct()
    {
    }

    public function getAllHotels($params)
    {

        $url = $this->buildURL("lookup.json", $params);

        $client = new GuzzleAPIClient;
        $travelPayout = new TravelPayoutAPI($client);
        return $travelPayout->get($url);
    }

    public function getHotelById($id)
    {
        $url = $this->buildURL("lookup.json", $params);
        return $this->getData($this->method, $url);
    }

    private function processParams(array $params)
    {
        return http_build_query($params);
    }

    private function buildURL(string $url, array $params)
    {
        $url = rawurlencode($url);
        $url .= '?';
        $url .= $this->processParams($params);
        return $url;
    }
}
