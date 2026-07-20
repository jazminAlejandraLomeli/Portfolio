<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Portfalio</title>

    @vite(['resources/css/app.css', 'resources/css/aside.css', 'resources/js/app.js', 'resources/js/layouts/nav.js'])

    @livewireStyles

</head>

<body>

    
    <div class="layout ">
        @persist('aside')
            <!-- Contenedor de datos personales  -->
            <aside class="sidebar">
                @include('layouts.aside')

            </aside>
        @endpersist
        {{-- Contenedor Principal --}}

        <div wire:loading.delay class="loading-bar"></div>

        <main class="container contenido">
            @persist('nav')
                @include('layouts.nav')
            @endpersist

            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>

</html>