<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
 *  Rutas para crear un nuevo usuario
*/
// Ruta para crear un nuevo usuario
Route::get('/create-user',[UserController::class,'create'])->name('create-user');

/*
 *  Rutas para el login
*/
// Ruta para regresar la vista del login de usuarios
Route::get('/',[LoginController::class,'index'])->name('login');
// Ruta para enviar datos al servidor y verificar si el usuario existe
Route::post('/',[LoginController::class,'store']);

/*
 *   Rutas para el logout
*/
//Ruta para cerrar sesión del usuario actual y regresar a la vista del login
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

/*
 *   Rutas para el dashboard del administrador
*/
// Ruta para regresar la vista del dashboard del administrador
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');



Route::get('/empleados', function () {
    return view('admin.empleados.empleados');
});

Route::get('/inventario', function () {
    return view('admin.inventario.inventario');
});

Route::get('/ventas', function () {
    return view('admin.ventas.ventas');
});

Route::get('/proveedores', function () {
    return view('admin.proveedores.proveedores');
});