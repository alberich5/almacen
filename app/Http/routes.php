<?php


Route::get('/', function () {
    return view('welcome');
});

//ruta de categoria
Route::resource('almacen/categoria','CategoriaController');

//ruta de articulo
Route::resource('almacen/articulo','ArticuloController');

//ruta de cliente
Route::resource('ventas/cliente','ClienteController');

//ruta del proveedor
Route::resource('compras/proveedor','ProveedorController');

//ruta del ingreso almacen
Route::resource('compras/ingreso','IngresoController');


Route::get('/home', 'HomeController@index');

Route::auth();
Route::get('/', function () {    
	return view('auth/login');
});