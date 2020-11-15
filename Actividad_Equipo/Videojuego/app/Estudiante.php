<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Storage;

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
    	//$nombre = $request->file('foto')->getClientOriginalName();
         //$nombre = html_entity_decode($nombre);
    	//$request->file('foto')->storeAs('public',$nombre);
    	$data = $request->all();
       $data['nombre'] = html_entity_decode($data['nombre']);
         $data['apellido'] = html_entity_decode($data['apellido']);
         $data['experiencia'] = html_entity_decode($data['experiencia']);
    	unset($data['_token']);
        $data['foto_string'] = file_get_contents($data['foto']);
        $data['foto_string'] = base64_encode($data['foto_string']);
        unset($data['foto']);
    	//unset($data['foto']);
    	//$data['ruta'] = '/fotos/public/'.$nombre;
    	//$students=Http::post('http://students.starmen.com.mx/api/students',$data);
        $students = Http::post('http://127.0.0.1:8000/api/students',$data);;
        echo $students;

    }
}
