<?php

use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\RegistrarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/iniciar-sesion', [InicioSesionController::class, 'index'])->name('iniciarSesion');

Route::get('/crear-cuenta', [RegistrarController::class, 'index'])->name('crearCuenta');
Route::post('/crear-cuenta', [RegistrarController::class, 'store']);   

