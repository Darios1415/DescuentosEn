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

Route::get('/', function(){
    return view('index');
});

Route::post('checklogin', 'LoginController@store')->name('checklogin');
Route::get('login', 'LoginController@index')->name('login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('logout', 'LoginController@salir')->name('logout');

Route::group(['middleware' => 'rol'], function () {

    Route::get('admin', function(){
        return view('admin');
    });

    Route::resource('/subcategorias', 'SubcategoriaController');
    Route::resource('/clientes', 'ClienteController');
    Route::resource('/proveedores', 'ProveedorController');
    Route::resource('/productos', 'ProductoController');
    Route::resource('/categorias', 'CategoriaController');
});





