<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    // Constructor para verificar autenticación
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    // Función para mostrar la vista del dashboard
    public function index(){
        if(auth()->user()->rol == '1'){
            return view('admin.ventas.ventas');
        }
        return view('auth.login');
    }
}