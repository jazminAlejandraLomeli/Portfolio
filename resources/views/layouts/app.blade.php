<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Mi App</title>

    @vite(['resources/css/app.css', 'resources/css/aside.css', 'resources/js/app.js'])
</head>

<body>


    <div class="layout ">
        <!-- Contenedor de datos personales  -->
        <aside class="sidebar">
            @include('layouts.aside')

        </aside>
        {{-- Contenedor Principal --}}
        <main class="container contenido">
            @include('layouts.nav')

            @yield('content')
        </main>
    </div>
</body>

</html>
