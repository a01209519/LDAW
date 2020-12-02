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

Route::get('/','TituloController@index');
Route::resource('/titulos','TituloController');
Route::get('/sugerencias','TituloController@sugerencia')->name('sugerencias');
Route::get('/sugerencia_a/{id}','TituloController@aceptar')->name('aceptar_sugerencia');
Route::get('/sugerencia_r/{id}','TituloController@rechazar')->name('rechazar_sugerencia');

Route::post('/aute','Aute@iniciar_sesion')->name('iniciar_sesion');
Route::get('/aute','Aute@cerrar_sesion')->name('cerrar_sesion');

Route::get('/user/gm','VideojuegoController@mis_juegos')->name('mis_juegos');
Route::post('/user/gm','VideojuegoController@store')->name('guardar_mis_juegos');
Route::get('/user/gm/del/{id}','VideojuegoController@destroy')->name('borrar_juego');
Route::get('/titulos/juegos/{id}','VideojuegoController@juegos_disponibles')->name('juegos_disponibles');


Route::post('/resena','ResenaController@registrar_resena')->name('registrar_resena');
Route::resource('/ofertas','OfertasController');
