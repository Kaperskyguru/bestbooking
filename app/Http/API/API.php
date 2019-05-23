<?php
namespace App\Http\API;

abstract class API
{

    public function __construct($client)
    {
        $this->token = env('API_TOKEN', '');
        $this->client = $client;
        $this->init();
    }

    private function init()
    {
        $this->client->connect();
    }

    // private function request(string $method, string $url)
    // {
    //     $this->request = new Request($method, $url);
    // }

    // private function response()
    // {
    //     if (!is_null($this->request)) {
    //         return $this->GuzzleClient->send($this->request);
    //     }
    //     throw new \Exception('Request Object cannot be null');

    // }

    // private function processResponseData()
    // {
    //     $response = $this->response();
    //     echo $response->getBody();

    //     // convert to a proper array if neccessary
    // }

    // protected function getData(string $method, string $url)
    // {
    //     $this->request($method, $url);
    //     return $this->processResponseData();
    // }

}
