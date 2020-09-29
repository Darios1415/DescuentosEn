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
    /*=====================================
		Rutas de usuarios no registrados
	======================================*/
    Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        $usuario = session()->get('usuario');
        return view('index')->with('usuario', $usuario);
    });
    Route::post('checklogin', 'LoginController@store')->name('checklogin');
    Route::get('login', 'LoginController@index')->name('login');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('checkregister', 'Auth\RegisterController@register')->name('checkregister');
    Route::get('logout', 'LoginController@salir')->name('logout');
    Route::post('registro', 'Cliente\ClienteController@registro')->name('registro');
    });

    /*=====================================
		Rutas de administrador
	======================================*/
    Route::group(['middleware' => 'rol'], function () {
    Route::get('admin', function () {
        $admin = session()->get('usuario');
        return view('admin')->with('admin', $admin);
    });
    Route::resource('/subcategorias', 'Admin\SubcategoriaController');
    Route::resource('/clientes', 'Admin\ClienteController');
    Route::resource('/proveedores', 'Admin\ProveedorController');
    Route::resource('/productos', 'Admin\ProductoController');
    Route::resource('/categorias', 'Admin\CategoriaController');
    });

    /*=====================================
		Rutas de cliente
	======================================*/
    Route::group(['middleware' => 'client'], function () {
    Route::get('cliente', function () {
        $usuario = session()->get('usuario');
        return view('cliente/client')->with('usuario', $usuario);
    });
    Route::resource('/cliente', 'Cliente\ClienteController');
    });

    /*=====================================
		Rutas de proveedor
	======================================*/
    Route::group(['middleware' => 'prov'], function () {
    Route::get('proveedorr', function () {
        $usuario = session()->get('usuario');
        return view('proveedor/proveedor')->with('usuario', $usuario);
    });
    Route::resource('/proveedor', 'proveedor\ProveedorController');
    });


    Route::get('plantilla', function () {
    return view('plantilla');
    });
