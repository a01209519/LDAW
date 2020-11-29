<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Plataforma extends Model
{
    //
    public static function getPlatforms(){
    	$response = Http::get("http://127.0.0.1:8001/api/plataforma");
        return $response->json();
    }
}
