<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioSesionController extends Controller
{

    public function index()
    {
        return View('auth.iniciarSesion');
    }

    public function login(Request $request)
    {
        $resultado = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ( Auth::attempt($resultado, $request->get('remember')) )    
            return redirect()->route('posts.index');
        
    
        //esto retrocede a la pagina anterior que se habia estado y ->with () manda un mensjae en una session.
        return back()->with('mensaje', 'Correo o Password incorrecto');
    }
}
