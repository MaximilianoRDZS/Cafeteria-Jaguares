<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', [DashboardController::class, 'index']);
});

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