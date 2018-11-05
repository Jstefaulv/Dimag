<?php


/*
|--------------------------------------------------------------------------
| Rutas Auth
|--------------------------------------------------------------------------
*/
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout');

Route::post('/codigo','UserController@codigo')->name('codigo');
/*
|--------------------------------------------------------------------------
| Ruta Home
|--------------------------------------------------------------------------
*/
Route::get('/home','LocalController@index');


/*																		
|--------------------------------------------------------------------------
| Rutas Sectores																
|--------------------------------------------------------------------------
*/
Route::get('/{id}/mesas','MesaController@index');


/*
|--------------------------------------------------------------------------
| Rutas Pedidos
|--------------------------------------------------------------------------
*/
Route::post('/mesas/{idMesa}','MesaController@AsignarCantidad');
Route::get('/mesa/{id}/pedido','PedidoController@index');

Route::post('/mesa/{idMesa}/addprod','DetallePedidoController@store');
//ELIMINAR TODOS LOS PRODUCTOS DE UN PEDIDO
Route::get('/mesa/{idMesa}/delete','DetallePedidoController@delete');
//ELIMINAR UN PRODUCTO
Route::get('/detalle/delete/{id}','DetallePedidoController@deleteProducto');
//Modificar un pedido ya hecho
Route::get('/mesa/{idMesa}/pedido/edit','DetallePedidoController@index');

Route::post('/mesa/{idMesa}/comanda','PedidoController@store');

/*
|--------------------------------------------------------------------------
| Ruta Pago
|--------------------------------------------------------------------------
*/
Route::get('/pago','PagoController@index');




