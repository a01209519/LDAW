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

Route::view('/','home');

Route::view('/home','welcome');

Route::resource('/titulo','TituloController');

Route::get('/aute','Aute@iniciar_sesion')->name('iniciar_sesion');