<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Categorias, App\Http\Models\Productos;

class TiendaControlador extends Controller
{
/*     public function __construct(){
        //el middleware auth verifica si el usuario esta conectado. es admin verifica si es admin
        $this->middleware('auth');
        $this->middleware('esAdmin');
    } */

    public function getHome(){
        $p = Productos::orderBy('id', 'Desc')->get(); //busca el registro con este id a traves del modelo productos
        //$cats = Categorias::where('modulo', '0')->pluck('nombre', 'id');
        $data = ['p' => $p]; //paso el registro q traje a la vista con la variable $p
        return view('tienda.home', $data);

    }

    public function getContacto(){
        
        return view('tienda.contacto');

    }

    public function getFaq(){
        
        return view('tienda.faq');

    }

    public function getProductos(){

        $c = Categorias::all();
        $p = Productos::inRandomOrder()->take(5)->get();

        

        return view('tienda.productos')->with([ 'categorias' => $c, 'productos' => $p,]);
        

    }

    public function getFiltrados(){

/*         $c = Categorias::all();
        //$data = ['c' => $c];
        return view('tienda.filtrado')->with(['categorias' -> $c]); */

    }

    public function verProductos($producto){

        $prod = Productos::where('nombre', $producto)->get();

        return view('tienda.ver')->with([ 'producto' => $prod,]);
        
    }
}