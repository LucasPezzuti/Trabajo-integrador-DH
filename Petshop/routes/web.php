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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Ruta auth
Route::get('/', 'tienda\TiendaControlador@getHome')->name('home');
Route::get('/login', 'ConexionControlador@getLogin')->name('login');
Route::post('/login', 'ConexionControlador@postLogin')->name('login');
Route::get('/logout', 'ConexionControlador@getLogout')->name('logout');
Route::get('/registro', 'ConexionControlador@getRegistro')->name('registro');
Route::post('/registro', 'ConexionControlador@postRegistro')->name('registro');
Route::get('/recover', 'ConexionControlador@getRecover')->name('recover');
Route::post('/recover', 'ConexionControlador@postRecover')->name('recover');
Route::get('/contacto', 'tienda\TiendaControlador@getContacto')->name('contacto');
Route::get('/faq', 'tienda\TiendaControlador@getFaq')->name('faq');
Route::get('/productos', 'tienda\TiendaControlador@getProductos')->name('productos');

Route::post('/productos', 'tienda\TiendaControlador@PostProductos')->name('productos');
/* Route::get('/filtrado/{catego}', 'tienda\TiendaControlador@getFiltrados')->name('filtrados'); */
Route::get('/ver/{producto}', 'tienda\TiendaControlador@verProductos')->name('ver_productos');
