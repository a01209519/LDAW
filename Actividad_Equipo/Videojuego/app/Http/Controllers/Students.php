<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Estudiante;

class Students extends Controller
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
        //Mandamos a llamar la función del modelo.
        $students = Estudiante::getStudents();
        //$var = 1;  
        //dd($students);
       return view('Students',["students"=>$students]);
        //$students = json_decode($students,true);
        //return view('Students',["students"=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student_form');
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
        //$students=Http::post('http://127.0.0.1:8000/api/students',$request->all());
        // Mandamos los datos a la funcion sendStudent del modelo
        Estudiante::sendStudent($request);
        $students = Estudiante::getStudents();
        return view('Students',["students"=>$students]);
    }

    /**x
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        /*$students=$this->readStudents();*/
        $student = Estudiante::getStudent($id);

        return view("student",["students"=>$student]);
        //echo $students;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo "edit";
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
        echo "SI";
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
    }
}
