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
        $response3 = Http::withToken(session('jwt'))->get(env('API').'ofertas/aceptada/'.$id);
        if(!$response1->failed() && !$response2->failed() && !$response3->failed()){
        	return [
                'ofertas'=>$response1->json(),
                'videojuego'=>$response2->json(),
                'videojuego_aceptado'=>$response3->json(),
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
    public static function acceptOffer($id){
        $data = [
            'id_oferta' => $id
        ];
        $response = Http::withToken(session('jwt'))->post(env('API').'oferta/aceptar',$data);

        if(!$response->failed()){
            return true;
        }else{
            return false;
        }
    }

     public static function rejectOffer($id){
        $data = [
            'id_oferta' => $id
        ];
        $response = Http::withToken(session('jwt'))->post(env('API').'oferta/rechazar',$data);

        if(!$response->failed()){
            return true;
        }else{
            return false;
        }
    }
}
