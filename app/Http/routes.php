<?php


Route::get('/', function () {    
	return view('auth/login');
});

//ruta de categoria
Route::resource('almacen/categoria','CategoriaController');

//ruta de articulo
Route::resource('almacen/articulo','ArticuloController');

//ruta de articulo
Route::resource('almacen/inventario','InventarioController');

//ruta de movimiento
Route::resource('almacen/movimiento','MovimientoController');

//ruta de movimiento
Route::resource('almacen/cliente','ClienteController');
//ruta de movimiento
Route::resource('reporte/ver','ReporteController');




Route::resource('excel','ExcelController');






//ruta del proveedor
Route::resource('compras/proveedor','ProveedorController');

//ruta del ingreso almacen
Route::resource('compras/ingreso','IngresoController');

//ruta de vent
Route::resource('ventas/venta','VentaController');
//ruta de control de usuarios
Route::resource('seguridad/usuario','UsuarioController');

//ruta de hom de la apliaccion
Route::get('/home', 'HomeController@index');



//Rutas para el manejo de login y usuarios
Route::auth();



	
Route::get('pdf', 'PdfController@invoice');
