<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//validator clase de laravel para validaciones
use Validator, Hash;
use App\usuarios;

class ConexionControlador extends Controller
{
    public function getLogin(){
        return view('conexion.login');
    }

    public function getRegistro(){
        return view('conexion.registro');
    }

    //el email es unico y lo compara con email de la base de datos
    public function postRegistro(Request $request){
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:App\usuarios,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password'
        ];
        //defino los mensajes para las validaciones
        $messages = [
            'name.required' => 'Su nombre es requerido.',
            'lastname.required' => 'Su apellido es requerido.',
            'email.required' => 'Su email es requerido.',
            'email.email' => 'El formato de su email es incorrecto.',
            'email.unique' => 'Ya existe un usuario registrado con este email.',
            'password.required' => 'Su contraseña es requerida.',
            'password.min' => 'Su contraseña debe tener al menos 8 caracteres.',
            'cpassword.required' => 'Es necesario confirmar la contraseña.',
            'cpassword.min' => 'La confirmación debe tener al menos 8 caracteres.',
            'cpassword.same' => 'Las contraseñas no coinciden.',
        ];
        
        //llamo a la clase validator, con el metodo make y le paso parametros
        //le paso los valores que se enviaron en la peticion(request), tambien las reglas 
        //entonces en validator se almacena el resultado de las validaciones
        //la variable messages que le paso es la de arriba, definiendo los errores.
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            //si falla junta los errores y los devuelve con la variable de sesion message
            //con el tipo de alerta danger puedo mostrarlas con bootstrap
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert','danger');
        else:
            //creo una nueva instancia del modelo user, para guardar los datos en la tabla usuarios.
            // e encondea por seguridad
            $user = new usuarios;
            $user->nombre = e($request->input('name'));
            $user->apellido = e($request->input('lastname'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));
            
            if($user->save());
                return redirect('/login')->with('message', 'Usuario creado con éxito. Ahora puede iniciar sesión.')->with('typealert','success');
            endif;

    }
}
