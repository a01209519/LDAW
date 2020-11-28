<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Titulo extends Model
{
    //Consulta a la API y devuelve un listado de libros en formato JSON
    public static function getTitles(){

        //cargar datos del API
        $response = Http::get("http://127.0.0.1:8001/api/titulos");
        return $response->json();
    }


    //SHOW
    public static function getTitle($id){

        //cargar datos del API
        $response = Http::get('http://127.0.0.1:8001/api/titulos/'. $id);
        //Devolver la respuesta en un arreglo
        return $response->json();

    }

    //Show de reseñas
    public static function getResena($id){

        //cargar datos del API
        $response = Http::get('http://127.0.0.1:8001/api/resena/'. $id);
        //Devolver la respuesta en un arreglo
        return $response->json();

    }

    public static function save_Title(Request $request){
        $data = $request->all();
        unset($data['_token']);
        $img= file_get_contents($data['img']);
        unset($data['img']);
        $response = Http::post('http://127.0.0.1:8001/api/titulos',$data);
        if($response->serverError()){
        return true;    
        }else{
            Storage::put('/img/titulos/'.$response.'.jpg',$img);
            return false;
        }
    }
}
