<?php

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

Route::get('/', function () {
    return view('welcome');
});

//------------- Vistas de Sistema -------------\\

Route::get('/sistema/actores', 'actoresController@principal');
Route::get('/sistema/clientes', 'clientesController@principal');
Route::get('/sistema/obras', 'obrasController@principal');
Route::get('/sistema/usuarios', 'usuariosController@principal');
Route::get('/sistema/ventas', 'ventasController@principal');