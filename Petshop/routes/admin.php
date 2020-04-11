<?php
//prefijo admin para todas las rutas admin
Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\PanelControlador@getPanel');
});