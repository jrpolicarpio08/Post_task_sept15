<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiconnect extends Controller
{
    public function getApi(){
        $post = Http::get("https://api.publicapis.org/entries");

        Return json_decode($posts);
    }
}
