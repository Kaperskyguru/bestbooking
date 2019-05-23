<?php
namespace App\Http\API;

use App\Http\API\Contracts\ClientInteface;
use GuzzleHttp\Client;

class GuzzleAPIClient implements ClientInteface
{
    protected $api_key;
    protected $api_secret;
    protected $api_token;
    protected $base_url;

    public function __construct()
    {
        $this->api_key = env('API_KEY', '');
        $this->api_secret = env('API_SECRET', '');
        $this->api_token = env('API_TOKEN', '');
        $this->base_url = env('BASE_URL', '');
    }

    public function connect($options = null)
    {
        if (is_null($options)) {
            $this->client = new Client(['base_uri' => $this->base_url]);
        } else {
            $this->client = new Client($options);
        }
        return $this;
    }

    public function request(string $method, string $url, $data = null, $headers = [])
    {
        \strtoupper($method);
        switch ($method) {
            case 'GET':
                return $this->getRequest($method, $url, $headers);
                break;
            case 'POST':
                return $this->postRequest($method, $url, $data, $headers);
                break;
            case 'PUT':
                return $this->putRequest($method, $url, $data, $headers);
                break;
            case 'PATCH':
                return $this->patchRequest($method, $url, $data, $headers);
                break;
            case 'DELETE':
                return $this->deleteRequest($method, $url, $headers);
                break;
            default:
                throw new \Exception('No Acceptable method found');
                break;
        }

    }

    private function postRequest(string $method, string $url, $data, $headers = [])
    {
        return $this->client->request($method, $url, $data, $headers);
    }

    private function getRequest(string $method, string $url, $headers = [])
    {
        return $this->client->get($url, $headers);
    }

    private function putRequest(string $method, string $url, $data, $headers = [])
    {
        return $this->client->request($method, $url, $data, $headers);
    }

    private function patchRequest(string $method, string $url, $data, $headers = [])
    {
        return $this->client->request($method, $url, $data, $headers);
    }

    private function deleteRequest(string $method, string $url, $headers = [])
    {
        return $this->client->request($method, $url, $headers);
    }
}
