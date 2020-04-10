<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConexionControlador extends Controller
{
    public function getLogin(){
        return view('conexion.login');
    }

    public function getRegistro(){
        return view('conexion.registro');
    }
}
