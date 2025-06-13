<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePostRequest;

class RegistrarController extends Controller
{
    //
    public function index()
    {
        return View('auth.registrar');
    }

    public function store(StorePostRequest $request)
    {
        //validaciones laravel
        $request->validate([
            'name' => 'required|min:5|max:20',
            'username' => 'required|unique:users|min:5|max:15',
            'email' => 'required|unique:users|email|max:70',
            'password' => 'required|confirmed|min:6|max:25',   
            'password_confirmation' => 'required|min:6|max:25'
        ]);

        User::create([
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'name' => $request->get('name'),
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->route('posts.index');
    }
}
