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
                    <a class="uppercase font-bold text-gray-600" href="/login">Login</a>
                    <a class="uppercase font-bold text-gray-600" href="/registrar">Crear Cuenta</a>
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