@props([
    'title' => 'Jazmin A. Lomeli — Desarrolladora Web Full Stack',
    'description' => 'Diseño y desarrollo aplicaciones web modernas con Laravel, Livewire y Tailwind CSS. UI/UX interactivo y backend robusto.',
])

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/landing.css'])

    @livewireStyles
</head>

<body class="font-sans text-brand-900 antialiased">

    {{-- Salto a contenido: accesibilidad --}}
    <a href="#proyectos"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:rounded-full focus:bg-brand-700 focus:px-5 focus:py-2 focus:text-white">
        Saltar a proyectos
    </a>

    <main>
        {{ $slot }}
    </main>

  
    @livewireScripts
</body>

</html>
