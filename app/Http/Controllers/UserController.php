<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Función para crear un nuevo usuario
    public function create()
    {
        // Datos del nuevo usuario 
        $newUserData = [
            'name' => 'uriel',
            'apellido_paterno' => 'torres',
            'apellido_materno' => 'de luna',
            'email' => '2030342@upv.edu.mx',
            'password' => Hash::make('123456'), // Cambiar por la contraseña que desees
            'rol' => '1', // 1 para administrador, 0 para empleado
            'status' => '1', // 1 para usuario activo, 0 para usuario inactivo
        ];

        // Crear un nuevo usuario en la base de datos
        User::create($newUserData);

        // Puedes redirigir a alguna página después de la creación del usuario
        return redirect()->route('login');
    }
}
