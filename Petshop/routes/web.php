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

// Ruta auth
Route::get('/login', 'ConexionControlador@getLogin')->name('login');
Route::post('/login', 'ConexionControlador@postLogin')->name('login');
Route::get('/logout', 'ConexionControlador@getLogout')->name('logout');
Route::get('/registro', 'ConexionControlador@getRegistro')->name('registro');
Route::post('/registro', 'ConexionControlador@postRegistro')->name('registro');