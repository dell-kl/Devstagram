<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevStagram - @yield('titulo-nosotros')</title>
    <link href="/src/styles.css" rel="stylesheet">
</head>
<body>
    
    <h1 class="text-3xl font-bold underline">
        @yield('titulo-principal')
    </h1>

    <nav>
        <a href="/">Principal</a>
        <a href="/nosotros">Nosotros</a>
        <a href="/tienda">Tienda</a>
        <a href="/contacto">Contacto</a>
    </nav>

</body>
</html>