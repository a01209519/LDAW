<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autent;

class Aute extends Controller
{
    //
    public function iniciar_sesion(Request $request){
    	/*$data = $request->all();
    	unset($data['_token']);
    	$data['correo'] = e($data['correo']);
    	$data['pswd'] = e($data['pswd']);*/
    	Autent::acreditar($request);
    	return back();
    	
    }

    public function cerrar_sesion(){
    	session()->flush();
    	return back();

    }
}
