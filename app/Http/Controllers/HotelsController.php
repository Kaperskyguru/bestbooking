<?php

namespace App\Http\Controllers;

use App\Http\API\HotelAPI;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HotelsController extends Controller
{
    public function getAllHotels(Request $request)
    {
        $hotel = new HotelAPI;

        $position = Location::get('129.56.39.72');

        $params = [
            'query' => $position->latitude . ',' . $position->longitude,
            'lookFor' => urlencode('both'),
            // 'limit' => 1,
        ];

        return response()->json($hotel->getAllHotels($params), 200);
    }
}
