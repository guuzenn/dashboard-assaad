<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class GeocodeHelper
{
    public static function getCoordinates($alamat)
    {
        // $apiKey = env('LOCATIONIQ_API_KEY');
        // $alamatLengkap = $alamat;

        // $response = Http::get("https://us1.locationiq.com/v1/search.php", [
        //     'key' => $apiKey,
        //     'q' => $alamatLengkap,
        //     'format' => 'json',
        //     'limit' => 1,
        // ]);

        // if ($response->successful()) {
        //     $data = $response->json();

        //     // Cek apakah respons tidak kosong dan memiliki lat/lon
        //     if (isset($data[0]['lat']) && isset($data[0]['lon'])) {
        //         return [
        //             'lat' => $data[0]['lat'],
        //             'lon' => $data[0]['lon'],
        //         ];
        //     }
        // }

        // // Jika gagal, kembalikan null
        // return null;

        $key = env('OPENCAGE_API_KEY');
        $response = Http::get("https://api.opencagedata.com/geocode/v1/json", [
            'q' => $alamat,
            'key' => $key,
            'language' => 'id',
            'limit' => 1
        ]);

        if ($response->successful() && !empty($response['results'][0]['geometry'])) {
            return $response['results'][0]['geometry'];
        }

        return null;
    }
}