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

    {{-- Ícono de la pestaña: foco (idea) con </> de desarrollo --}}
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    {{-- Solo precargamos la fuente del texto principal (el LCP en celular).
         Fraunces (67 KB) ya no se precarga: le robaba ancho de banda al
         primer pantallazo en conexiones lentas. --}}
    <link rel="preload" as="font" type="font/woff2" crossorigin
        href="{{ Vite::asset('node_modules/@fontsource/poppins/files/poppins-latin-400-normal.woff2') }}">

    {{-- En producción el CSS va dentro del HTML (10 KB comprimido): así no
         hay una petición extra que bloquee el primer pantallazo. Las rutas
         de fuentes e imágenes del CSS son absolutas (/build/...), siguen
         funcionando. En desarrollo se usa Vite normal. --}}
    @if (Vite::isRunningHot())
        @vite(['resources/css/landing.css', 'resources/js/landing.js'])
    @else
        <style>{!! Vite::content('resources/css/landing.css') !!}</style>
        @vite(['resources/js/landing.js'])
    @endif

    {{-- Sin JavaScript no hay animaciones de entrada: que el contenido se vea igual --}}
    <noscript>
        <style>
            .reveal, .reveal-word { opacity: 1 !important; transform: none !important; }
            .typewriter [x-cloak] { display: inline !important; }
            .typewriter-caret { display: none !important; }
            .wa-float[x-cloak] { display: inline-flex !important; }
        </style>
    </noscript>
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
