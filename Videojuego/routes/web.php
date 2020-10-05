<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'integrante');

Route::view('/jorge', 'jorge');

Route::get('/students',function(){
	$students = [
		"1"=>[
			"nombre"=>"Victor Manuel",
			"apellidos"=> "Ávila Hernández"
		]
	];
	return view('students',['students'=>$students]);
});

Route::view('/victor', 'victor');

Route::view('/lalo', 'lalo');

Route::view('/randy', 'randy');



