<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Estudiante extends Model
{
    public static function getStudents(){
    	//Recogemos todos los estudiantes api
    	$students=Http::get('http://127.0.0.1:8000/api/students');
    	return $students->json();
    }
    public static function getStudent($id){
    	//Recogemos el estudiante a través de la api
    	$student=Http::get('http://127.0.0.1:8000/api/students/'.$id);
    	return $student->json();
    }
    public static function sendStudent(Request $request){
    	$nombre = $request->file('foto')->getClientOriginalName();
    	$request->file('foto')->storeAs('public',$nombre);
    	$data = $request->all();
    	unset($data['_token']);
    	unset($data['foto']);
    	$data['ruta'] = '/fotos/public/'.$nombre;
    	$students=Http::post('http://127.0.0.1:8000/api/students',$data);
    }
}
