<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\EmpleadosController;
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


/*
 *   Rutas para el empleados del administrador
*/
// Ruta para regresar la vista del empleados del administrador
Route::get('/empleados', [EmpleadosController::class,'index'])->name('empleados');
//Rutas para agregar un empleado
Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleado.create');


/*
 *   Rutas para el inventario del administrador
*/
// Ruta para regresar la vista del inventario del administrador
Route::get('/inventario', [InventarioController::class,'index'])->name('inventario');

/*
 *   Rutas para el ventas del administrador
*/
// Ruta para regresar la vista del ventas del administrador
Route::get('/ventas', [VentasController::class,'index'])->name('ventas');

/*
 *   Rutas para el proveedores del administrador
*/
// Ruta para regresar la vista del proveedores del administrador
Route::get('/proveedores', [ProveedoresController::class,'index'])->name('proveedores');
//Rutas para agregar un empleado
Route::get('/proveedores/create', [ProveedoresController::class, 'create'])->name('proveedores.create');