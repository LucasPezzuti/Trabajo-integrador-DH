<?php
//prefijo admin para todas las rutas admin
Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\PanelControlador@getPanel');
    Route::get('/users', 'Admin\UserControlador@getUsers');

    /* Productos */
    Route::get('/productos', 'Admin\ProductosControlador@getHome');
    Route::get('/productos/add', 'Admin\ProductosControlador@getProductoadd');

     /* Categorias */
     /* hago uso del filtrado pasandole el modulo */
     Route::get('/categorias/{modulo}', 'Admin\CategoriasControlador@getHome');
     Route::post('/categorias/add', 'Admin\CategoriasControlador@postCategoriaAdd');
});