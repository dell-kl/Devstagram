@extends('layouts.app')

@section('titulo-nosotros')
Dashboard personal
@endsection

@section('titulo-contenido')
Tu Cuenta
@endsection

@section('contenido')

    <div class="flex justify-center mt-10">
        <div class="md:w-8/12 w-full lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ Vite::asset('resources/images/usuario.svg')}}" alt="imagen del perfil del usuario"/>
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{  Str::replace('-', ' ', Auth::user()->username) }}</p>
            </div>
        </div>
    </div>

@endsection

