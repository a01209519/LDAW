<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Oferta extends Model
{
    //

    //Consulta a la API y devuelve un listado de libros en formato JSON
    public static function getOffers($id){
    	//cargar datos del API
        $response1 = Http::withToken(session('jwt'))->get(env('API').'ofertas/'.$id);
        $response2 = Http::withToken(session('jwt'))->get(env('API').'videojuego/'.$id);
        if(!$response1->failed() && !$response2->failed()){
        	return [
                'ofertas'=>$response1->json(),
                'videojuego'=>$response2->json(),
            ];
        }else{
        	return false;
        }
    }

    public static function saveOffer(Request $request){
        $data = $request->all();
        unset($data['_token']);
        $response = Http::withToken(session('jwt'))->post(env('API').'oferta',$data);
        if(!$response->failed()){
            return true;
        }else{
            return false;
        }
    }
}
