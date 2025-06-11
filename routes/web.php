<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros', function() {
    return View('nosotros');
});

Route::get('/contacto', function() {
    return View('contacto');
});

Route::get('/tienda', function() {
    return View('tienda');
});