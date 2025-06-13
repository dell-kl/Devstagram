<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\CerrarSesionController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Middleware\AuthenticationMiddleware;

Route::get('/', function () {

    return view('index');
});

Route::get('/iniciar-sesion', [InicioSesionController::class, 'index'])
->middleware('login')
->name('iniciarSesion');

Route::post('/iniciar-sesion', [InicioSesionController::class, 'login']);

Route::post('/cerrar-sesion', [CerrarSesionController::class, 'logout'])->name('cerrarSesion');

Route::get('/crear-cuenta', [RegistrarController::class, 'index'])->name('crearCuenta');
Route::post('/crear-cuenta', [RegistrarController::class, 'store']);   

Route::get('/muro', [PostController::class, 'index'])
->middleware(['auth'])
->name('posts.index');