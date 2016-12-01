<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
/* Rutas Usuarios */
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'DashboardController@index');
    Route::resource('usuarios', 'UsuarioController');
    Route::resource('productos', 'productoController');
    Route::resource('compras', 'compraController');
    Route::resource('facturas', 'facturaController');
    Route::resource('informes', 'informeController');
    Route::get('usuarios/eliminar/{id}', 'UsuarioController@destroy');
    Route::get('productos/eliminar/{id}', 'productoController@destroy');
    Route::get('compras/eliminar/{id}', 'compraController@destroy');
    Route::get('facturas/eliminar/{id}', 'facturaController@destroy');
    Route::get('informes/eliminar/{id}', 'informeController@destroy');
});