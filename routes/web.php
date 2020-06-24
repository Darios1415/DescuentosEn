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

use App\Http\Controllers\CategoriasController;

Route::get('/', function () {
    return view('index');
});


Route::resource('/subcategorias', 'SubcategoriaController');
Route::resource('/clientes', 'ClienteController');
Route::resource('/proveedores', 'ProveedorController');

