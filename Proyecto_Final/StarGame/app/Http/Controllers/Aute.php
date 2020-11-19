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
    	$bool = Autent::acreditar($request);
    	if($bool == 'true'){
    		return back();
    	}else{
    		return back()->with('alert','Usuario y/o contraseña invalido(s)');
    	}
    	
    }

    public function cerrar_sesion(){
    	session()->flush();
    	return redirect('/');

    }
}
