<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Estudiante;
use Illuminate\Support\Facades\Cache;
use Storage;

class StudentsApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function readStudents(){
        //Cargar archvivo
        $filePath = storage_path("app/json/datos.json");
        if ($data = file_get_contents($filePath)){
            return json_decode($data,true);
        } return false;
        
    }
    public function index()
    {
        //
        //$students = DB::table('students')->get();
        //return $students;
        // Llamada al modelo estudiante para que traiga todos los estudiantes.
        $students = Estudiante::all();//->sortBy('nombre');
        return $students;
        //return response()->json($this->readStudents());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $imagen = $request->input('foto_string');
        $imagen = base64_decode($imagen);
        Storage::put('ejemplo2.jpg',$imagen);
        /*$estudiante = new Estudiante();
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellidos = $request->input('apellido');
        $estudiante->experiencia = $request->input('experiencia');
        $estudiante->ruta = $request->input('ruta');
        if($estudiante->save()){
            return ["succes"=> true];
        }*/


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        /*$student = $this->readStudents();
        return response()->json($student[$id]);*/

        $student = Estudiante::find($id);
        return $student;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo "Destruir".$id;
    }
}
