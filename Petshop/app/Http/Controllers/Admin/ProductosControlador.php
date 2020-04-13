<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\Categorias;
/* traigo el modelo de categorias para seleccionar una de la lista
 */
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
        //el metodo pluck devuelve un array con los datos q se van a cargar
        $cats = Categorias::where('modulo', '0')->pluck('nombre', 'id');
        $data = ['cats' => $cats];
        return view('admin.productos.add', $data);
    }
}
