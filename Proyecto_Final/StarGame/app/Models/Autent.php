<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class Autent extends Model
{
    public static function Acreditar(Request $request){
    	$boleano = 'false';
    	$data = $request->all();
    	unset($data['_token']);
    	$data['correo'] = e($data['correo']);
    	$data['pswd'] = e($data['pswd']);
    	//$users=Http::get('http://127.0.0.1:8001/api/user/aute');
        $response=Http::post('http://127.0.0.1:8001/api/auth/login',$data);
        if(!$response->failed()){
            $boleano = "true";
            $token = $response->json();
            $tokenSplitted = explode(".", $token['access_token']);
            $tokenSplitted = base64_decode($tokenSplitted[1]);
            $user = json_decode($tokenSplitted,true);
        	//$users = $users->json();
        	/*foreach($users as $id =>$user){
        		if($user['Correo'] == $data['correo'] && Hash::check($data['pswd'],$user['Password'])){
        			$boleano = 'true';
        			$request->session()->put('id', $user['Id']);
        			$request->session()->put('correo', $user['Correo']);
                    $request->session()->put('nombre', $user['Nombre']);
                    $request->session()->put('alerta',"si");
                    $request->session()->put('jwt',$response['access_token']);
        		}
        	}return $boleano;*/
            $request->session()->put('id',$user['id']);
            $request->session()->put('correo',$user['correo']);
            $request->session()->put('nombre',$user['nombre']);
            $request->session()->put('alerta',"si");
            $request->session()->put('jwt',$response['access_token']);
        }
    }

    public static function Cerrar(){
        $response=Http::post('http://127.0.0.1:8001/api/auth/logout');
        if(!$response->failed()){
            return true;
        }else{
            return false;
        }
    }
}
