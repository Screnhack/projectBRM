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
/*
Route::get('/', function () {
    return view('home');
});*/
Route::get('/',[
	'uses' => 'ProductosController@index',
	'as'   => '/'
]);
Route::get('/proveedor', function () {
    return view('proveedor');
});

Route::resource('producto','ProductosController');
Route::resource('factura','FacturasController');

Route::get('/inventario',[
	'uses' => 'ProductosController@inventario',
	'as'   => 'producto.inventario'
]);
Route::get('factura/{id}/destroy',[
		'uses'=>'FacturasController@destroy',
		'as' =>'facturas.destroy'
	]);
