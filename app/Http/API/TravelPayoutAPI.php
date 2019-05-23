<?php
namespace App\Http\API;

use App\Http\API\Contracts\ClientInteface;
use App\Http\API\Contracts\Endpoint;

class TravelPayoutAPI implements Endpoint
{
    private $token;
    private $url;

    public function __construct(ClientInteface $client)
    {

        $this->token = env('API_TOKEN', '');
        $this->client = $client;
        $this->init();
    }

    private function init()
    {
        $this->client->connect();
    }

    public function post($data)
    {

        $url = "";
        return $this->client->request('POST', $url, $data);
    }

    public function get(string $url, $headers = [])
    {
        $url .= '&token=' . $this->token;

        $result = $this->client->request('GET', $url, null, $headers);
        return $this->processResponseData($result);
    }

    public function update($data, $id)
    {
        $url = "";
        return $this->client->request('PUT', $url, $data);
    }

    public function delete()
    {
        $url = "";
        return $this->client->request('DELETE', $url);
    }

    private function processResponseData($result)
    {

        $list_of_hotels = array();
        // $list_of_hotels2 = array();
        // $locations = array();
        // $newhotels = array();
        $hotels = json_decode($result->getBody(), true);

        if (!is_null($hotels['results']) && !is_null($hotels['results']['hotels']) && $hotels['status'] == 'ok') {
            $list_of_hotels = $hotels['results']['hotels'];
            // $locations = $hotels['results']['locations'];
        }
        // foreach ($list_of_hotels as $hotel) {
        //    $newhotels['name'] = $hotel['name'];
        //    $newhotels['id'] = $hotel['id'];
        //    $newhotels['locationid'] = $hotel['locationId'];
        //    $newhotels['location']['lat'] = $hotel['location']['lat'];
        //    $newhotels['location']['lon'] = $hotel['location']['lon'];
        //    array_push($list_of_hotels2, $newhotels);
        // }

        return $list_of_hotels;
    }

}
