<?php


Route::get('/', function () {    
	return view('auth/login');
});

//ruta de categoria
Route::get('almacen-categoria', 'CategoriaController@index');
Route::get('almacen-crear', 'CategoriaController@create');
//Route::get('almacen-editar', 'CategoriaController@edit');
Route::get('almacen-editar',['uses'=> 'CategoriaController@edit', 'as'=> 'almacen-editar.index']);
Route::get('almacen-borrar', 'CategoriaController@destroy');

//Route::resource('almacen/categoria','CategoriaController');

//ruta de articulo
//Route::resource('almacen/articulo','ArticuloController');
Route::get('almacen-articulo', 'ArticuloController@index');
Route::get('almacen-articulo-crear', 'ArticuloController@create');
Route::get('almacen-articulo-editar', 'ArticuloController@edit');
Route::get('almacen-articulo-borrar', 'ArticuloController@destroy');

//ruta de cliente
//Route::resource('ventas/cliente','ClienteController');
Route::get('almacen-cliente', 'ClienteController@index');
Route::get('almacen-cliente-crear', 'ClienteController@create');
Route::get('almacen-cliente-editar', 'ClienteController@edit');
Route::get('almacen-cliente-borrar', 'ClienteController@destroy');

//ruta del proveedor
//Route::resource('compras/proveedor','ProveedorController');
Route::get('almacen-proveedor', 'ProveedorController@index');
Route::get('almacen-proveedor-crear', 'ProveedorController@create');
Route::get('almacen-proveedor-editar', 'ProveedorController@edit');
Route::get('almacen-proveedor-borrar', 'ProveedorController@destroy');

//ruta del ingreso almacen
//Route::resource('compras/ingreso','IngresoController');
Route::get('almacen-ingreso', 'IngresoController@index');
Route::get('almacen-ingreso-crear', 'IngresoController@create');
Route::get('almacen-ingreso-mostrar', 'IngresoController@show');
Route::get('almacen-ingreso-editar', 'IngresoController@edit');
Route::get('almacen-ingreso-borrar', 'IngresoController@destroy');

//ruta de venta
//Route::resource('ventas/venta','VentaController');
Route::get('almacen-venta', 'VentaController@index');
Route::get('almacen-venta-crear', 'VentaController@create');
Route::get('almacen-venta-mostrar', 'VentaController@show');
Route::get('almacen-venta-editar', 'VentaController@edit');
Route::get('almacen-venta-borrar', 'VentaController@destroy');

//ruta de venta
//Route::resource('reporte/kardex','ReporteController');
Route::get('reporte-kardex', 'ReporteController@index');

//Route::resource('seguridad/usuario','UsuarioController');
Route::get('seguridad-usuario', 'UsuarioController@index');


//ruta de hom de la apliaccion
Route::get('/home', 'HomeController@index');


//Rutas para el manejo de login y usuarios
Route::auth();



	
Route::get('pdf', 'PdfController@invoice');
