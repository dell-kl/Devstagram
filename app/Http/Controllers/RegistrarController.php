<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    //
    public function index()
    {
        return View('auth.registrar');
    }

    public function store(Request $request)
    {
        //validaciones laravel
        $request->validate([
            'name' => 'required|min:5|max:20'
        ]);

        return redirect("/");
    }
}
