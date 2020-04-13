<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Str;

use App\Http\Models\Categorias, App\Http\Models\Productos;
//traigo el modelo de productos para guardarlos y eso
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

    public function postProductoAdd(Request $request){
        $rules = [
            'nombre' => 'required',
            //'imagen' => 'required',
            'imagen' => 'image',
            'precio' => 'required',
            'contenido' => 'required'
        ];

        $messages = [
            'nombre.required' => 'El nombre del producto es requerido.',
            //'imagen.required' => 'Seleccione una imagen para el producto.',
            'imagen.image' => 'El archivo no es una imagen válida.',
            'precio.required' => 'Ingrese el precio del producto.',
            'contenido.required' => 'Ingrese una descripción del producto.'

        ];


        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            //si falla junta los errores y los devuelve con la variable de sesion message
            //con el tipo de alerta danger puedo mostrarlas con bootstrap
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert','danger')->withInput();
            //el withInput sirve para persistir los datos, osea si falla el guardado no perdemos los datos y no hay que volver a ingresarlos.
        else:
            $producto = new Productos;
            $producto->estado ='0'; //0= borrador, 1= se ven en la tienda
            $producto->nombre = e($request->input('nombre'));
            $producto->slug = Str::slug($request->input('nombre'));
            $producto->categoria_id = $request->input('categorias');
            $producto->imagen = "imagen.png";
            $producto->precio = $request->input('precio');
            $producto->endescuento = $request->input('endescuento');
            $producto->descuento = $request->input('descuento');
            $producto->contenido = e($request->input('contenido'));
            //el primer "contenido" es el campo de la tabla, el segundo es la clase que le puse al campo en el form add 

            if($producto->save()):
                return redirect('/admin/productos')->with('message', 'Guardado con éxito.')->with('typealert','success');
            endif;
        endif;  

    }

}
