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

    {{-- Fuentes self-hosted: precargamos la del texto (LCP) y la del titular
         para que lleguen junto con el CSS y no después. --}}
    <link rel="preload" as="font" type="font/woff2" crossorigin
        href="{{ Vite::asset('node_modules/@fontsource/poppins/files/poppins-latin-400-normal.woff2') }}">
    <link rel="preload" as="font" type="font/woff2" crossorigin
        href="{{ Vite::asset('node_modules/@fontsource-variable/fraunces/files/fraunces-latin-opsz-normal.woff2') }}">

    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
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

</body>

</html>
