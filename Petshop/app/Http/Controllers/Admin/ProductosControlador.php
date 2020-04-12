<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosControlador extends Controller
{
    public function __construct(){
        //el middleware auth verifica si el usuario esta conectado. es admin verifica si es admin
        $this->middleware('auth');
        $this->middleware('esAdmin');
    }

    public function getHome(){

        return view('admin.productos.home');
    }

    
    public function getProductoadd(){

        return view('admin.productos.add');
    }
}
