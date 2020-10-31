<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Resena extends Model
{
    //
    public static function guardar_resena(Request $request){
    	$resena = $request->all();
    	//Convertimos el string en numero para evitar problemas
    	$titulo = (int)$resena['id_titulo'];
    	$resena['id_titulo'] = $titulo;
    	unset($resena['_token']);
    	$resena['resena'] = e($resena['resena']);
    	$resena['id_usuario'] = session('id');
    	$enviar_resena = Http::post('http://127.0.0.1:8001/api/resena',$resena);	
    }

}
