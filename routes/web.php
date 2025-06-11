<?php

use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\RegistrarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [InicioSesionController::class, 'index']);

Route::get('/registrar', [RegistrarController::class, 'index']);
Route::post('/registrar', [RegistrarController::class, 'store']);

