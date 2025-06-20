@extends('layouts.app')

@section('titulo-nosotros')
Registrate
@endsection

@section('titulo-contenido')
Crear tu cuenta con nosotros
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:items-center mt-10 md:gap-10">
    <div class="md:w-3/5">
        <img 
        class="rounded"
        src="{{ Vite::asset('resources/images/register/registrar.jpg') }}"/>
    </div>

    <div class="md:w-4/12 bg-white p-6 shadow rounded-lg">
        <form class="p-2" method="post" action="{{ route('crearCuenta') }}">
            {{ csrf_field() }}
            <div>
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">Nombre</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    class="p-3 w-full rounded-lg border @error('name') border-red-400 @enderror"
                    placeholder="Inserta tu nombre"/>
                @error('name')
                    <span class="text-red-600 font-black text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="pt-2">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">Nombre Usuario</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    value="{{ old('username') }}"
                    class="border p-3 w-full rounded-lg @error('username') border-red-400 @enderror"
                    placeholder="Inserta tu nombre de usuario"/>

                @error('username')
                    <span class="text-red-600 font-black text-sm">{{ $message }}</span>
                @enderror
            </div>
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
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">Repetir Password</label>
                <input
                    type="password"
                    id="password"
                    name="password_confirmation"
                    class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-400 @enderror"
                    placeholder="Inserta tu password de confirmacion"/>
                @error('password_confirmation')
                    <span class="text-red-600 font-black text-sm">{{ $message }}</span>
                @enderror
            </div>
            <input type="submit"
            value="Crear cuenta" 
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white uppercase font-bold w-full p-3 mt-3 rounded-lg"/>
        </form>
    </div>
</div>
@endsection