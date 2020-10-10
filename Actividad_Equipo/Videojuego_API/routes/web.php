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

//Route::get('/students','Students@index');

Route::get('/student/{id}', "Students@show");

Route::view('/lalo', 'lalo');
Route::resource('students','Students');
Route::view('/randy', 'randy');



