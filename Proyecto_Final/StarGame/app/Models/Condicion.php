<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Condicion extends Model
{
    //
    public static function getConditions(){
    	$response = Http::get("http://127.0.0.1:8001/api/condicion");
        return $response->json();
    }
}
