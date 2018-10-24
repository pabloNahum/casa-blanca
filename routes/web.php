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
    return view('sitio.index');
});

//------------- Vistas de Sistema -------------\\

Route::get('/sistema/actores', 'actoresController@principal');
Route::get('/sistema/clientes', 'clientesController@principal');
Route::get('/sistema/obras', 'obrasController@principal');
Route::get('/sistema/usuarios', 'usuariosController@principal');
Route::get('/sistema/ventas', 'ventasController@principal');

//------------- Formularios de Actores -------------\\

Route::get('/sistema/actores/nuevo_actor');
Route::get('/sistema/actores/consulta_actor');

//------------- Formularios de Clientes -------------\\

Route::get('/sistema/clientes/nuevo_cliente', 'actoresController@nuevocliente');
Route::get('/sistema/clientes/consulta_cliente', 'actoresController@consultacliente');

Route::get('/sistema/clientes/nuevo_cliente', 'clientesontroller@nuevocliente');
Route::POST('/sistema/clientes/guarda_cliente', 'clientesontroller@guardacliente')->name('guardacliente');
Route::get('/sistema/clientes/consulta_cliente', 'clientesController@consultacliente');


//------------- Formularios de Obras -------------\\

Route::get('/sistema/obras/nueva_obra', 'obrasController@nuevaobra');
Route::get('/sistema/obras/consulta_obra', 'obrasController@consultaobra');
Route::POST('/sistema/obras/guarda_obra', 'obrasController@guardaobra');


//------------- Formularios de Usuarios -------------\\

Route::get('/sistema/actores/nuevo_usuario', 'usuariosController@nuevousuario');
Route::POST('/sistema/usuarios/guarda_usuario',  'usuariosController@guardausuario')->name('guardausuario');
Route::get('/sistema/actores/consulta_usuario', 'usuariosController@consultausuario');

//------------- Formularios de Ventas -------------\\

Route::get('/sistema/actores/nueva_venta', 'ventasController@nuevaventa');
Route::get('/sistema/actores/consulta_venta', 'ventasController@nuevoventa');

//------------- Vistas de Sitio -------------\\

Route::get('/', 'sitioController@home');
Route::get('/blog', 'sitioController@blog');
Route::get('/boletos', 'sitioController@boletos');
Route::get('/cartelera', 'sitioController@cartelera');
Route::get('/contacto', 'sitioController@contacto');
Route::get('/cuenta', 'sitioController@cuenta');