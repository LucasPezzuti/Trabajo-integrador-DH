<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Str, Config, Image ;//clase image intervention que baje con composer;

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
        //llamo al modelo de productos para crear la lista
        $productos = Productos::orderBy('id', 'desc')->paginate(25); //paginado de 25
        $data = ['productos' => $productos];
        //a la view le paso la lista
        return view('admin.productos.home', $data);
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
            //path es ruta donde se va a guardar las imagenes
            //la carpeta va a ser la fecha en la q subimos la imagen, para que no esten todas en el mismo lugar y no tarde tanto en idenxar
            $path = '/'.date('Y-m-d');
            //con el trim le saco los espacios, y con getclientblabla le extraigo la extension.
            $ext = trim($request->file('imagen')->getClientOriginalExtension());
            //path donde se guarda la imagen
            $upload_path = Config::get('filesystems.disks.uploads.root'); //clase de laravel configurada en eas ruta(carpeta config)
            //reemplazo la extension por un espacio vacio.
            $nombre = Str::slug(str_replace($ext,'',$request->file('imagen')->getClientOriginalName())); //voy a extraer el nombre de la imagen eliminando espacios y caracteres especiales

            $filename= rand(1,9999999).'-'.$nombre.'.'.$ext; //nuevo nombre para el archivo q se guarda. numero random + nombre + extension
            $final_file = $upload_path.'/'.$path.'/'.$filename; 

            
            $producto = new Productos;
            $producto->estado ='0'; //0= borrador, 1= se ven en la tienda
            $producto->nombre = e($request->input('nombre'));
            $producto->slug = Str::slug($request->input('nombre'));
            $producto->categoria_id = $request->input('categorias');
            $producto->file_path = date('Y-m-d'); //carpeta destino
            $producto->imagen = $filename;
            $producto->precio = $request->input('precio');
            $producto->endescuento = $request->input('endescuento');
            $producto->descuento = $request->input('descuento');
            $producto->contenido = e($request->input('contenido'));
            //el primer "contenido" es el campo de la tabla, el segundo es la clase que le puse al campo en el form add 

            if($producto->save()):
                if($request->hasFile('imagen')): // Si hay un archivo coni el nombre "imagen"..
                    $file = $request->imagen->storeAs($path, $filename, 'uploads'); //guarda el archivo en el path que marque en uploads
                    //clase image intervention 
                    $img = Image::make($final_file);
                    //fit te deja crear una miniatura con los parametros de tamaño
                    //en lugar de fit puedo poner resize tambien, que la ajusta, no la corta como fit
                    $img->resize(256, 256, function($constraint){
                        //actualiza el tamaño
                        $constraint->upsize();
                    });
                    //para no sobreescribir la que ya tenemos, creo una nueva miniatura por separado
                    $img->save($upload_path.'/'.$path.'/t_'.$filename);
                endif;
                return redirect('/admin/productos')->with('message', 'Guardado con éxito.')->with('typealert','success');
            endif;
        endif;  

    }

}
