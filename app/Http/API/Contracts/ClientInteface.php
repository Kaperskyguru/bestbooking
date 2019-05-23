<?php
namespace App\Http\API\Contracts;

interface ClientInteface
{
    public function connect($options = []);
    public function request(string $method, string $url, $data = null, $headers = []);

}
