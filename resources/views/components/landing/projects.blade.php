@props(['projects'])

@php
    $collection = collect($projects);
    $featured = $collection->firstWhere('featured', true);
    $rest = $collection->reject(fn ($p) => ($p['featured'] ?? false) === true)->values();
@endphp

<section id="proyectos" class="relative px-5 py-24 sm:px-8 sm:py-32">
    <div class="mx-auto max-w-6xl">

        {{-- Encabezado: entra cuando la sección cruza el viewport.
             x-intersect viene incluido en el Alpine que carga Livewire. --}}
        <header class="max-w-2xl" x-data x-intersect.once.margin.-15%="$el.classList.add('is-in')">
            <p class="reveal text-sm font-semibold tracking-[0.2em] text-accent-500 uppercase" style="--i: 0">
                Proyectos
            </p>
            <h2 class="reveal mt-4 font-display text-[clamp(2rem,5vw,3.25rem)] leading-tight font-semibold text-balance"
                style="--i: 1">
                Trabajo real, no <span class="text-gradient-brand">plantillas</span>.
            </h2>
            <p class="reveal mt-5 text-lg text-brand-800/75" style="--i: 2">
                Cada proyecto empezó con un problema concreto de alguien. Abre cualquiera para ver el problema, cómo lo
                resolví y con qué lo construí.
            </p>
        </header>

        {{-- Caso destacado --}}
        @if ($featured)
            <div class="mt-14" x-data x-intersect.once.margin.-10%="$el.classList.add('is-in')">
                <x-landing.project-card :project="$featured" :featured="true" :index="0" />
            </div>
        @endif

        {{-- Resto de proyectos --}}
        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3"
            x-data x-intersect.once.margin.-10%="$el.classList.add('is-in')">
            @foreach ($rest as $i => $project)
                <x-landing.project-card :project="$project" :index="$i" />
            @endforeach
        </div>
    </div>

    {{-- El modal vive una sola vez, fuera del grid --}}
    <x-landing.project-modal :projects="$projects" />
</section>
