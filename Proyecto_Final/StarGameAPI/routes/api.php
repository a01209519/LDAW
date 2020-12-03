<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Models\User;
use App\Http\Controllers\ResenaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('/', function () {

	$user = User::findOrFail(1);
    return $user->titulo;
});*/


Route::get('/user/aute','UserController@iniciar_sesion')->name('iniciar_sesion');
Route::get('/user/vg/{id}','UserController@user_videojuegos')->name('user_videojuegos');

Route::resource('titulos', 'TituloController');
Route::get('/sugerencias','TituloController@sugerencia')->name('sugerencias');

Route::post('/sugerencias/accion','TituloController@sugerencia_accion')->name('sugerencias_accion');

//Route::get('/resena/{id}','ResenaController@show')->name('resena_show');

Route::apiResource('resena','ResenaController');

Route::apiResource('plataforma','PlataformaController');

Route::apiResource('condicion','CondicionController');

Route::resource('videojuego','VideojuegoController');

Route::resource('oferta','OfertaController');
Route::post('oferta/aceptar','OfertaController@aceptar')->name('aceptar_oferta');

Route::get('/ofertas/{id}','VideojuegoController@ofertas_videojuego');
Route::get('/ofertas/aceptada/{id}','VideojuegoController@ofertas_videojuego_aceptada');
Route::get('/videojuego/titulo/{id}/{id_user}','VideojuegoController@videojuegos_titulo');

//Rutas para jwt

Route::group([
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});