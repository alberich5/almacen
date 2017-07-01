<?php


Route::get('/', function () {    
	return view('auth/login');
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

//ruta de venta
Route::resource('ventas/venta','VentaController');

//ruta de venta
Route::resource('reporte/kardex','ReporteController');

Route::resource('seguridad/usuario','UsuarioController');

//ruta de hom de la apliaccion
Route::get('/home', 'HomeController@index');
//ruta de seguridad de usuarios de laravel
Route::resource('seguridad/usuario','UsuarioController');

//Rutas para el manejo de login y usuarios
Route::auth();



	
Route::get('pdf', 'PdfController@invoice');
