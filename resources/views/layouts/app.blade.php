<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DevStagram - @yield('titulo-nosotros')</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">DevStagram</h1>
                <nav class="flex gap-2 items-center">
                    
                    @auth 
                        <p><span class="font-bold">Hola:</span> <span class="uppercase font-light">{{ Str::replace('-', ' ', Auth::user()->username) }}</span></p>
                        <form method="POST" action="{{ route("cerrarSesion") }}">
                            @csrf
                            <button
                            class="hover:cursor-pointer" 
                            type="submit">Cerrar Sesion</button>
                        </form>
                    @endauth

                    @guest 
                        <a class="uppercase font-bold text-gray-600" href="{{ route('crearCuenta') }}">Crear Cuenta</a>
                        <a class="uppercase font-bold text-gray-600" href="{{ route('iniciarSesion') }}">Login</a>
                    @endguest

                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="text-center font-black text-3xl capitalize">
                @yield('titulo-contenido')
            </h2>
            @yield('contenido')
        </main>

        <footer class="text-center font-bold text-gray-500 uppercase my-10">
            DevStagram / Todos los derechos reservados {{ now()->year }}
        </footer>
    </body>
</html>