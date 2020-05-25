<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//validator clase de laravel para validaciones
// Hash hashea las password
// Auth, clase para validar. valida automaticamente el hash y compara con la bd
use Validator, Hash, Auth;
use App\User;

class ConexionControlador extends Controller
{
    public function __construct(){
        //lo que esta aca requiere que el usuario no este logeado
        //getLogout no se ejecuta dentro de este middleware
        //en middleware/redirectifauthenticated.php cambie la ruta de redireccion de /home a /
        $this->middleware('guest')->except(['getLogout']);

    }
    public function getLogin(){
        return view('conexion.login');
    }

    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password'=> 'required|min:8'
        ];

        $messages = [
            'email.required' => 'Su email es requerido.',
            'email.email' => 'El formato de su email es incorrecto.',
            'password.required' => 'Su contraseña es requerida.',
            'password.min' => 'Su contraseña debe tener al menos 8 caracteres.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            //si falla junta los errores y los devuelve con la variable de sesion message
            //con el tipo de alerta danger puedo mostrarlas con bootstrap
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert','danger');

        else:
            //el true define si queda abierta la sesion.
         
            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):

                return redirect('/');

            else: return back()->withErrors($validator)->with('message', 'Email o contraseña errónea.')->with('typealert','danger');

            endif;

        endif;
    }

    public function getRegistro(){
        return view('conexion.registro');
    }

    //el email es unico y lo compara con email de la base de datos
    public function postRegistro(Request $request){
        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:App\user,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password'
        ];
        //defino los mensajes para las validaciones
        $messages = [
            'nombre.required' => 'Su nombre es requerido.',
            'apellido.required' => 'Su apellido es requerido.',
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
            $user = new user;
            $user->nombre = e($request->input('nombre'));
            $user->apellido = e($request->input('apellido'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));
            
            if($user->save());
                return redirect('/login')->with('message', 'Usuario creado con éxito. Ahora puede iniciar sesión.')->with('typealert','success');
            endif;

    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

    public function getRecover(){
        return view('conexion.recover');
    }

    public function postRecover(Request $request){
        $rules = [
    
            'email' => 'required|email',

        ];
        //defino los mensajes para las validaciones
        $messages = [
          
            'email.required' => 'Su email es requerido.',
            'email.email' => 'El formato de su email es incorrecto.',

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
            $user = User::where('email', $request->input('email'))->count();
            if($user == "1"):
                $user = User::where('email', $request->input('email'))->first();
                $code = rand(100000, 900000);
                $data = ['nombre' => $user->nombre, 'email'=> $user->email, 'code' => $code];
                return view('emails.password_recover', $data);
            else:
                return back()->with('message', 'Este correo electrónico no existe.')->with('typealert', 'danger');
            endif;
        endif;     
    }
}
