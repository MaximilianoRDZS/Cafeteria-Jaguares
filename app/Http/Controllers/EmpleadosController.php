<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    // Constructor para verificar autenticación
    public function __construct(){
        $this->middleware(['auth']);
    }

    // Función para mostrar la vista del dashboard
    public function index(){
        if(auth()->user()->rol == '1'){
            return view('admin.empleados.empleados');
        }
        return view('auth.login');
    }

    //Funcion para retornar la vista de agregar empleados
    public function create(){
        # Vista del formulario para añadir colaboradores
        return view('admin.empleados.create');
    }

}