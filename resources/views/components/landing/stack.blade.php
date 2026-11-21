@php
    // Agrupamos lo que ya vive en config/data-skills.php. Deliberadamente
    // NO usamos 'percentage': ver nota en el README del rediseño.
    $groups = [
        'Frontend' => config('data-skills.Frontend'),
        'Backend' => config('data-skills.backend'),
        'Bases de datos' => config('data-skills.databases'),
        'Herramientas' => config('data-skills.tools'),
    ];

    $concepts = config('data-skills.concepts');
@endphp

<section id="stack" class="px-5 pt-10 pb-20 sm:px-8" x-data x-intersect.once.margin.-10%="$el.classList.add('is-in')">
    <div class="mx-auto max-w-5xl">

        <h2 class="reveal font-display text-2xl font-semibold text-brand-900 sm:text-3xl" style="--i: 0">
            Con qué trabajo
        </h2>

        <div class="mt-7 grid gap-x-10 gap-y-8 sm:grid-cols-2">
            @foreach ($groups as $label => $items)
                <div class="reveal" style="--i: {{ $loop->index + 1 }}">
                    <h3 class="text-xs font-semibold tracking-[0.18em] text-sand-500 uppercase">{{ $label }}</h3>

                    <ul class="mt-3 flex flex-wrap gap-2">
                        @foreach ($items as $item)
                            <li
                                class="inline-flex items-center gap-2 rounded-full bg-white/65 px-3 py-1.5 text-sm text-brand-800 ring-1 ring-white/70 transition-colors duration-200 hover:bg-white [&_svg]:h-4 [&_svg]:w-4 [&_img]:h-4 [&_img]:w-4 [&_img]:shrink-0">
                                {!! $item['icon'] !!}
                                <span>{{ $item['name'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        {{-- Conceptos: la línea más callada de toda la página --}}
        <div class="reveal mt-10 border-t border-sand-200/70 pt-6" style="--i: 5">
            <h3 class="text-xs font-semibold tracking-[0.18em] text-sand-500 uppercase">También manejo</h3>
            <p class="mt-3 flex flex-wrap items-center gap-x-2 gap-y-1.5 text-sm text-brand-800/70">
                @foreach ($concepts as $concept)
                    <span>{{ $concept['name'] }}</span>
                    @if (!$loop->last)
                        <span aria-hidden="true" class="text-sand-300">·</span>
                    @endif
                @endforeach
            </p>
        </div>
    </div>
</section>
