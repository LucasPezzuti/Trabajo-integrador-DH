<?php
//prefijo admin para todas las rutas admin
Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\PanelControlador@getPanel')->name('panel'); //name para la etiqueta content 
    Route::get('/users', 'Admin\UserControlador@getUsers')->name('lista_de_usuarios');

    /* Productos */
    Route::get('/productos', 'Admin\ProductosControlador@getHome')->name('productos');
    Route::get('/productos/add', 'Admin\ProductosControlador@getProductoadd')->name('agregar_productos');
    Route::post('/productos/add', 'Admin\ProductosControlador@postProductoAdd')->name('agregar_productos');
    Route::post('/productos/{id}/edit', 'Admin\ProductosControlador@postProductoEdit')->name('editar_productos');
    Route::get('/productos/{id}/edit', 'Admin\ProductosControlador@getProductoEdit')->name('editar_productos');


     /* Categorias */
     /* hago uso del filtrado pasandole el modulo */
    Route::get('/categorias/{modulo}', 'Admin\CategoriasControlador@getHome')->name('categorias');
    Route::post('/categorias/add', 'Admin\CategoriasControlador@postCategoriaAdd')->name('agregar_categorias');
    Route::get('/categorias/{id}/edit', 'Admin\CategoriasControlador@getCategoriaEdit')->name('editar_categorias');
    Route::post('/categorias/{id}/edit', 'Admin\CategoriasControlador@postCategoriaEdit')->name('editar_categorias');
    Route::get('/categorias/{id}/delete', 'Admin\CategoriasControlador@getCategoriaDelete')->name('borrar_categorias');
});