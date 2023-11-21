<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    // Constructor para verificar autenticación
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        if(auth()->user()->rol == '1'){
            return view('admin.inventario.inventario');
        }
        return view('auth.login');
    }
}