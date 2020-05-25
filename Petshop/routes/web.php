<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\Categorias, App\Http\Models\Productos;

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
Route::get('/perfil', 'tienda\TiendaControlador@verPerfil')->name('perfil');
Route::get('{id}/perfil_edit', 'tienda\TiendaControlador@editPerfil')->name('editar_perfil');
Route::post('{id}/perfil_edit', 'tienda\TiendaControlador@postPerfil')->name('editar_perfil');
Route::get('gracias', 'tienda\TiendaControlador@getGracias')->name('gracias');
//Route::get('/carrito', 'tienda\CarritoControlador@show')->name('carrito');

 Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'tienda\CarritoControlador@show'
]);
 
Route::bind('product', function($slug){
    return Productos::where('slug', $slug)->first();
});

Route::get('cart/add/{product}', [
    'as' => 'cart-add',
    'uses' => 'tienda\CarritoControlador@add'
]);

Route::get('product/{slug}', [
    'as' => 'product-detail',
    'uses' => 'tienda\StoreController@show'
]);

Route::get('cart/delete/{product}',[
   'as' => 'cart-delete',
   'uses' => 'tienda\CarritoControlador@delete' 
]);

Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses' => 'tienda\CarritoControlador@trash' 
 ]);
/*  
 Route::get('cart/update/{product}',[
    'as' => 'cart-update',
    'uses' => 'tienda\CarritoControlador@update' 
 ]);  */