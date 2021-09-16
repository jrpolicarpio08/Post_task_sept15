<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class apiconnect extends Controller
{
    public function getData($name){
        $client = new Client([
            'base_uri' => config('services.passport.login_endpoint'),
            'verify' => config('app.debug') ? false : true,
            'defaults' => [
                'exceptions' => false,
            ]
        ]);

        $response = $client->request('GET','https://api.coindesk.com/v1/bpi/currentprice.json',[
                'query' =>[
                'name' => $name
            ]
        ]);

        return $response;
    }
}