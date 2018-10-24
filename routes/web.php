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
/*
<<<<<<< HEAD*/
Route::get('/sistema/clientes/nuevo_cliente', 'actoresController@nuevocliente');
Route::get('/sistema/clientes/consulta_cliente', 'actoresController@consultacliente');
/*=======*/
Route::get('/sistema/clientes/nuevo_cliente', 'clientesontroller@nuevocliente');
Route::POST('/sistema/clientes/guarda_cliente', 'clientesontroller@guardacliente')->name('guardacliente');
Route::get('/sistema/clientes/consulta_cliente', 'clientesController@consultacliente');
/*>>>>>>> b3b03c9ae74c3495a5795621fcff6938a3e504b9*/

//------------- Formularios de Obras -------------\\

Route::post('/sistema/obras/nueva_obra', 'obrasController@nuevaobra');
Route::POST('/sistema/obras/consulta_obra', 'obrasController@consultaobra');


//------------- Formularios de Usuarios -------------\\

Route::get('/sistema/usuarios/nuevo_usuario', 'usuariosController@nuevousuario');
Route::POST('/sistema/usuarios/guarda_usuario',  'usuariosController@guardausuario')->name('guardausuario');
Route::get('/sistema/usuarios/consulta_usuario', 'usuariosController@consultausuario');

//------------- Formularios de Ventas -------------\\

Route::get('/sistema/ventas/nueva_venta', 'ventasController@nuevaventa');
Route::POST('/sistema/ventas/guarda_venta',  'ventasController@guardaventa')->name('guardaventa');
Route::get('/sistema/ventas/consulta_venta', 'ventasController@consultaventa');

//------------- Vistas de Sitio -------------\\

Route::get('/', 'sitioController@home');
Route::get('/blog', 'sitioController@blog');
Route::get('/boletos', 'sitioController@boletos');
Route::get('/cartelera', 'sitioController@cartelera');
Route::get('/contacto', 'sitioController@contacto');
Route::get('/cuenta', 'sitioController@cuenta');