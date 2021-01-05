<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get('/ejemplo','PruebaController@index');

Route::get('/prueba','TrabajoController@saludo');
Route::get('/prueba/{id}','TrabajoController@saludo2');
//rutas
Route::get('/invoice', 'InvoiceController@index');
Route::get('/invoice/add', 'InvoiceController@add');
Route::get('/invoice/detail/{id}', 'InvoiceController@detail');
Route::get('/invoice/pdf/{id}', 'InvoiceController@pdf');
Route::get('/invoice/findClient', 'InvoiceController@findClient');
Route::get('/invoice/findProduct', 'InvoiceController@findProduct');
Route::post('/invoice/save', 'InvoiceController@save');
//

Route::resource('productos', 'ProductoController');
Route::resource('variables', 'VariableController'); 

Route::resource('clientes', 'ClienteController');

Route::resource('tipoClies', 'Tipo_clieController');

Route::resource('celulars', 'CelularController');

Route::resource('proveedors', 'ProveedorController');

Route::resource('comprobantes', 'ComprobanteController');

Route::resource('compras', 'CompraController');

Route::resource('compradetalles', 'CompradetalleController');

Route::post('/ventas/store', 'VentaController@store');
Route::resource('ventas', 'VentaController');


Route::resource('ventadetalles', 'VentadetalleController');