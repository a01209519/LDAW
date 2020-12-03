<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Usuario;
use App\Http\Models\UserRol;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function store(Request $request){
    	$usuario = new Usuario;
    	$usuario->nombre = $request->input('nombre');
    	$usuario->telefono = $request->input('telefono');
    	$usuario->correo = $request->input('correo');
    	$usuario->password = $request->input('password');

    	DB::beginTransaction();
		$usuario->save();
		$last_user = Usuario::all()->last()->id;
    	$rol = new UserRol;
    	$rol->id_user = $last_user;
    	$rol->id_rol = 1;
		$rol->save();
		DB::commit();
		if($usuario->save()&&$rol->save()){
			return response()->json([
                'resp' => true,
                'message' => 'Usuario registrado correctamente.'
            ]);
		}else{
			DB::rollback();
			return response()->json([
                'resp' => false,
                'message' => 'Ocurrio un error.'
            ]);
		}

    }

}
