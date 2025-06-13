@extends('layouts.app')

@section('titulo-nosotros')
Iniciar Sesion
@endsection

@section('titulo-contenido')
Entrar a tu perfil
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:items-center mt-10 md:gap-10">
    <div class="md:w-3/5">
        <img 
        class="rounded"
        src="{{ Vite::asset('resources/images/login/login.jpg') }}"/>
    </div>

    <div class="md:w-4/12 bg-white p-6 shadow rounded-lg">
        <form class="p-2" method="post" action="{{ route('iniciarSesion') }}">
            {{ csrf_field() }}
            
            @if ( session('mensaje') )
                <div class="bg-red-200 p-2 rounded">
                    <p class="text-red-600 font-black text-sm text-center uppercase">{{ session('mensaje') }}</p>
                </div>
            @endif

            <div class="pt-2">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="p-3 w-full rounded-lg border @error('email') border-red-400 @enderror"
                    placeholder="Inserta tu correo electronico"/>
                @error('email')
                    <span class="text-red-600 font-black text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="pt-2">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="p-3 w-full rounded-lg border @error('password') border-red-400 @enderror"
                    placeholder="Inserta tu password de registro"/>
                @error('password')
                    <span class="text-red-600 font-black text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="pt-2">
                <input type="checkbox" name="remember"/>
                <label>Da click, para mantener tu sesion.</label>
            </div>
            
            <input type="submit"
            value="Iniciar Sesion" 
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white uppercase font-bold w-full p-3 mt-3 rounded-lg"/>
        </form>
    </div>
</div>
@endsection