<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use App\Models\Titulo;

class ResenaController extends Controller
{
    //
    public function registrar_resena(Request $request){

    	Resena::guardar_resena($request);
    	return back();
    	


    }
}
