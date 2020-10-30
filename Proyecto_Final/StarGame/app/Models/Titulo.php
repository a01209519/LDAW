<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class Titulo extends Model
{
    //Consulta a la API y devuelve un listado de libros en formato JSON
    public static function getTitles(){

        //cargar datos del API
        $response = Http::get("http://127.0.0.1:8001/api/titulos");
        //Devolver la respuesta en un arreglo
        return $response->json();

    }
}
