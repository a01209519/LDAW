<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Videojuego extends Model
{
    //
    public static function get_user_games($id){
    	//$user_game = Http::get('http://127.0.0.1:8001/api/user/vg/'.$id);
    	$user_game = Http::withToken(session('jwt'))->get('http://127.0.0.1:8001/api/user/vg/'.$id);
    	//Si la respuesta falla, regresa falso
    	if($user_game->failed()){
    		return false;
    	}else{
    		return $user_game->json();
    	}
    }
}