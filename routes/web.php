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

Route::get('/sistema', 'sistemaController@principal');
Route::get('/sistema/actores', 'actoresController@principal');
Route::get('/sistema/clientes', 'clientesController@principal');
Route::get('/sistema/obras', 'obrasController@principal');
Route::get('/sistema/usuarios', 'usuariosController@principal');
Route::get('/sistema/ventas', 'ventasController@principal');

//------------- Formularios de Actores -------------\\

Route::get('/sistema/actores/nuevo_actor', 'actoresController@nuevoactor');
Route::get('/sistema/actores/consulta_actor', 'actoresController@consultaactor');
Route::POST('/sistema/actores/guarda_actor', 'actoresController@guardaactor')->name('guardaactor');

//------------- Formularios de Horarios -------------\\

Route::get('/sistema/horarios/nuevo_horario', 'horariosController@nuevohorario');
Route::get('/sistema/horarios/consulta_horario', 'horariosController@consultahorario');
Route::POST('/sistema/horarios/guarda_horario', 'horariosController@guardahorario')->name('guardahorario');

//------------- Formularios de Clientes -------------\\

Route::get('/sistema/clientes/nuevo_cliente', 'clientesController@nuevocliente');
Route::POST('/sistema/clientes/guarda_cliente', 'clientesController@guardacliente')->name('guardacliente');
Route::get('/sistema/clientes/consulta_cliente', 'clientesController@consultacliente');

//------------- Formularios de Obras -------------\\

Route::get('/sistema/obras/nueva_obra', 'obrasController@nuevaobra');
Route::get('/sistema/obras/consulta_obra', 'obrasController@consultaobra');
Route::POST('/sistema/obras/guarda_obra', 'obrasController@guardaobra')->name('guardaobra');


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