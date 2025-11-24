<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi App</title>

    @vite(['resources/css/app.css', 'resources/css/aside.css', 'resources/js/app.js'])
</head>

<body>


    <div class="layout ">
        <!-- Contenedor de datos personales  -->
        <aside class="sidebar">
            @include('layouts.aside')

        </aside>

        {{-- Aquí va tu aside si quieres que esté en todas las páginas --}}

        <main class="container contenido">
            @include('layouts.nav')

            @yield('content')
        </main>
    </div>
</body>

</html>
