@props([
    'project',
    'index' => 0,
    'featured' => false,
])

@php
    $cover = $project['cover'] ?? ($project['images'][0] ?? null);
    $coverPosition = $project['cover_position'] ?? 'center';

    // El config mezcla URLs remotas (placeholders) con archivos propios en
    // public/. Las remotas pasan tal cual; las locales van por asset(), que
    // arma la URL correcta SIN el prefijo "public/".
    $isRemote = $cover && \Illuminate\Support\Str::startsWith($cover, ['http://', 'https://']);
    $coverUrl = $cover ? ($isRemote ? $cover : asset($cover)) : null;

    // Versiones reducidas (banner-800.webp, banner-1280.webp) junto al
    // original: la tarjeta se ve a ~370-580 px, no necesita el de 3780 px.
    $srcset = [];
    if ($cover && !$isRemote) {
        foreach ([800, 1280] as $w) {
            $variant = preg_replace('/\.(\w+)$/', "-{$w}.$1", $cover);
            if (is_file(public_path($variant))) {
                $srcset[] = asset($variant) . " {$w}w";
            }
        }
    }
    $sizes = $featured
        ? '(min-width: 1152px) 576px, (min-width: 768px) 50vw, 100vw'
        : '(min-width: 1152px) 370px, (min-width: 640px) 50vw, 100vw';
@endphp

{{--
    La tarjeta entera es un <button>: toda el área es táctil (objetivo grande
    en móvil) y el teclado la alcanza con Tab + Enter, sin trucos de ARIA.
--}}
<button type="button" @click="$store.projectModal.show('{{ $project['id'] }}')"
    style="--i: {{ $index }}"
    {{ $attributes->class([
        'reveal group relative flex w-full cursor-pointer flex-col overflow-hidden rounded-card glass text-left transition-all duration-500 ease-soft',
        'hover:-translate-y-1.5 hover:shadow-[0_36px_80px_-32px_rgb(26,35,126,0.5)]',
        'motion-reduce:hover:translate-y-0',
        'md:flex-row md:items-stretch' => $featured,
    ]) }}>

    {{-- Brillo sutil que sigue el hover --}}
    <span aria-hidden="true"
        class="pointer-events-none absolute inset-0 z-10 opacity-0 transition-opacity duration-500 ease-soft group-hover:opacity-100"
        style="background: radial-gradient(60% 55% at 50% 0%, rgb(255 255 255 / .55), transparent 70%)"></span>

    {{-- Imagen --}}
    <div @class([
        'relative overflow-hidden bg-sand-100',
        'md:w-1/2 md:shrink-0 aspect-[16/10] md:aspect-auto' => $featured,
        'aspect-[16/10]' => !$featured,
    ])>
        @if ($coverUrl)
            <img src="{{ $coverUrl }}" alt="Vista previa de {{ $project['title'] }}" loading="lazy" decoding="async"
                @if ($srcset) srcset="{{ implode(', ', $srcset) }}" sizes="{{ $sizes }}" @endif
                width="1280" height="640"
                @class([
                    'h-full w-full object-cover transition-transform duration-700 ease-soft group-hover:scale-[1.06]',
                    // Cada portada se ancla donde está su título (config: cover_position)
                    'object-left' => $coverPosition === 'left',
                    'object-center' => $coverPosition === 'center',
                    'object-right' => $coverPosition === 'right',
                ])>
        @endif

        @if ($featured)
            <span
                class="absolute top-4 left-4 z-10 inline-flex items-center gap-1.5 rounded-full bg-brand-900/85 px-3 py-1.5 text-xs font-semibold text-white backdrop-blur">
                Caso destacado
            </span>
        @endif
    </div>

    {{-- Contenido --}}
    <div @class(['relative z-10 flex flex-1 flex-col p-6 sm:p-7', 'md:justify-center md:p-9' => $featured])>

        <p class="flex items-center gap-2 text-xs font-medium tracking-wide text-brand-500 uppercase">
            <span>{{ $project['category'] ?? 'Proyecto' }}</span>
            @isset($project['year'])
                <span aria-hidden="true" class="text-sand-300">·</span>
                <span>{{ $project['year'] }}</span>
            @endisset
        </p>

        <h3 @class([
            'mt-2 font-display font-semibold text-brand-900',
            'text-3xl sm:text-4xl' => $featured,
            'text-xl' => !$featured,
        ])>
            {{ $project['title'] }}
        </h3>

        <p @class(['mt-3 text-brand-800/75', 'text-base sm:text-lg' => $featured, 'text-sm' => !$featured])>
            {{ $project['tagline'] ?? \Illuminate\Support\Str::limit($project['description'], 110) }}
        </p>

        <div class="mt-5 flex flex-wrap gap-2">
            @foreach (array_slice($project['technologies'], 0, $featured ? 5 : 3) as $tech)
                <x-landing.tech-badge :tech="$tech" />
            @endforeach

            @if (count($project['technologies']) > ($featured ? 5 : 3))
                <span class="inline-flex items-center rounded-full bg-sand-100 px-3 py-1 text-xs font-medium text-sand-700">
                    +{{ count($project['technologies']) - ($featured ? 5 : 3) }}
                </span>
            @endif
        </div>

        <span
            class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-brand-700 transition-all duration-300 ease-soft group-hover:gap-3">
            Ver ficha técnica
            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </div>
</button>
