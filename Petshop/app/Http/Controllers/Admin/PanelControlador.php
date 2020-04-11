<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelControlador extends Controller
{
    public function __construct(){
        //el middleware auth verifica si el usuario esta conectado. es admin verifica si es admin
        $this->middleware('auth');
        $this->middleware('esAdmin');
    }

    public function getPanel(){
        return view('admin.panel');
    }
}
