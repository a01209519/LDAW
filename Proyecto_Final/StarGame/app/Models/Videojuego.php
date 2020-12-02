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
    	$user_game = Http::withToken(session('jwt'))->get(env('API').'user/vg/'.$id);
    	//Si la respuesta falla, regresa falso
    	if($user_game->failed()){
    		return 'false';
    	}else{
    		return $user_game->json();
    	}
    }

    public static function save_user_game(Request $request){
        $data = $request->all();
        unset($data['_token']);
        $data['titulo'] = (int)$data['titulo'];
        $data['plataforma'] = (int)$data['plataforma'];
        $data['condicion'] = (int)$data['condicion'];
        $data['id_usuario'] = session('id');
        $data['estatus'] = 1;
        $response = Http::withToken(session('jwt'))->post(env('API').'videojuego',$data);
        if(!$response->failed()){
            return true;
        }else{
            return false;
        }
    }
    public static function delete_user_game($id){
        $response = Http::withToken(session('jwt'))->delete(env('API').'videojuego/'.$id);
        //Si la respuesta falla, regresa falso
        if($response->failed()){
            return false;
        }else{
            return true;
        }
    }
}