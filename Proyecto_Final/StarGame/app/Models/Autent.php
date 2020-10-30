<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Autent extends Model
{
    public static function Acreditar(Request $request){
    	$boleano = 'false';
    	$data = $request->all();
    	unset($data['_token']);
    	$data['correo'] = e($data['correo']);
    	$data['pswd'] = e($data['pswd']);
    	$users=Http::get('http://127.0.0.1:8001/api/user/aute');
    	$users = $users->json();
    	foreach($users as $id =>$user){
    		if($user['Correo'] == $data['correo'] && $user['Password'] == $data['pswd']){
    			$boleano = 'true';
    			$request->session()->put('id', $user['Id']);
    			$request->session()->put('correo', $user['Correo']);
    		}
    	}return $boleano;
    }
}
