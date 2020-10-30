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

Route::resource('/','TituloController');
Route::resource('/titulos','TituloController');

Route::post('/aute','Aute@iniciar_sesion')->name('iniciar_sesion');
Route::get('/aute','Aute@cerrar_sesion')->name('cerrar_sesion');

