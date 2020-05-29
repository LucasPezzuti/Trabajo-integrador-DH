<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Categorias, App\Http\Models\Productos;
use App\User;
use Validator, Hash, Auth;


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
        $p = Productos::inRandomOrder()->take(8)->get();

        

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

    public function verPerfil(){

        
        $miid = auth()->id();

        $user = User::where('id', $miid)->get();

        return view('tienda.perfil')->with([ 'user' => $user,]);
        
    }

    public function editPerfil($id){

        $user = User::find($id); //busca el registro con este id a traves del modelo user
       
        return view('tienda.perfil_edit')->with([ 'user' => $user,]);
        
    }

    public function postPerfil(Request $request, $id){

        //reglas
    $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required|email'
    ];
    //mensajes presonalizados
    $messages = [
        'nombre.required' => 'Su nombre es requerido.',
        'apellido.required' => 'Su apellido es requerido.',
        'email.required' => 'Su email es requerido.',
        'email.email' => 'El formato de su email es incorrecto.',
        /* 'email.unique' => 'Ya existe un usuario registrado con este email.', */
    ];
    //validacion 

    $validator = Validator::make($request->all(), $rules, $messages);
    if($validator->fails()):
        //si falla junta los errores y los devuelve con la variable de sesion message
        //con el tipo de alerta danger puedo mostrarlas con bootstrap
        return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert','danger');

    else:
        /* en vez de hacer un new, uso find  */
        $u = User::find($id);
        $u->nombre = $request->input('nombre');
        $u->apellido = e($request->input('apellido'));
        //$c->slug = Str::slug($request->input('nombre'));
        //el slug te guarda el nombre pero reemplaza espacios por guiones y mayusculas x minusculas
        $u->email = e($request->input('email'));
        if($u->save()):
            return back()->with('message', 'Guardado con éxito.')->with('typealert','success');
        endif;
    endif;
    }

    public function getGracias(){

       
        return view('tienda.gracias');
        
    }
        
    }