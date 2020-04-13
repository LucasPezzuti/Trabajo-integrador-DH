<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Str;

use App\Http\Models\Categorias;  // traigo el modelo de categorias



class CategoriasControlador extends Controller
{
    public function __construct(){
       
        //el middleware auth verifica si el usuario esta conectado. es admin verifica si es admin
        
        $this->middleware('auth');
        $this->middleware('esAdmin');
    }

    public function getHome($modulo){
         //paso como parametro el modulo 0 que es de productos
        
         //consulta de la lista de categorias
        $cats = Categorias::where('modulo', $modulo)->orderBy('nombre', 'Asc')->get();
        //array con los valores de la consulta
        $data = ['cats' => $cats];

        //paso a la vista la variable con los valores de la consulta
        return view('admin.categorias.home', $data); //esto se lee carpeta admin, subcarpeta categorias view home


    }



    public function postCategoriaAdd(Request $request){
        //reglas
        $rules = [
            'nombre' => 'required',
            'icono' => 'required',
        ];
        //mensajes presonalizados
        $messages = [
            'nombre.required' => 'Se requiere de un nombre para la categoría.',
            'icono.required' => 'Se requiere de un ícono para la cetegoría.'
        ];
        //validacion 

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            //si falla junta los errores y los devuelve con la variable de sesion message
            //con el tipo de alerta danger puedo mostrarlas con bootstrap
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert','danger');

        else:
            $c = new Categorias;
            $c->modulo = $request->input('modulo');
            $c->nombre = e($request->input('nombre'));
            $c->slug = Str::slug($request->input('nombre'));
            //el slug te guarda el nombre pero reemplaza espacios por guiones y mayusculas x minusculas
            $c->icono = e($request->input('icono'));
            if($c->save()):
                return back()->with('message', 'Guardado con éxito.')->with('typealert','success');
            endif;
        endif;
    }



    public function getCategoriaEdit($id){
        $cat = Categorias::find($id);
        $data = ['cat' => $cat];
        return view('admin.categorias.edit', $data);
    }



    public function postCategoriaEdit(Request $request, $id){
    //reglas
    $rules = [
        'nombre' => 'required',
        'icono' => 'required',
    ];
    //mensajes presonalizados
    $messages = [
        'nombre.required' => 'Se requiere de un nombre para la categoría.',
        'icono.required' => 'Se requiere de un ícono para la cetegoría.'
    ];
    //validacion 

    $validator = Validator::make($request->all(), $rules, $messages);
    if($validator->fails()):
        //si falla junta los errores y los devuelve con la variable de sesion message
        //con el tipo de alerta danger puedo mostrarlas con bootstrap
        return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert','danger');

    else:
        /* en vez de hacer un new, uso find  */
        $c = Categorias::find($id);
        $c->modulo = $request->input('modulo');
        $c->nombre = e($request->input('nombre'));
        //$c->slug = Str::slug($request->input('nombre'));
        //el slug te guarda el nombre pero reemplaza espacios por guiones y mayusculas x minusculas
        $c->icono = e($request->input('icono'));
        if($c->save()):
            return back()->with('message', 'Guardado con éxito.')->with('typealert','success');
        endif;
    endif;
    }



    public function getCategoriaDelete($id){
        $c = Categorias::find($id);
        if($c->delete()):
            return back()->with('message', 'Borrado con éxito.')->with('typealert', 'success');
        endif;
    }
}
