<?php
namespace App\Http\API\Contracts;

interface Endpoint
{
    public function get(string $url, $headers = []);
    public function post($data);
    public function delete();
    public function update($data, $id);
}
