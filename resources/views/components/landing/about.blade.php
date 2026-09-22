@php
    $softSkills = ['Proactividad', 'Pensamiento crítico', 'Trabajo en equipo', 'Comunicación', 'Adaptabilidad', 'Organización'];

    $education = [
        ['title' => 'Ingeniería en Computación', 'place' => 'CUAltos · Universidad de Guadalajara', 'time' => '2019 — 2023'],
        ['title' => 'Bachillerato', 'place' => 'Preparatoria Regional de Tepatitlán', 'time' => '2016 — 2019'],
    ];
@endphp

{{--
    SECUNDARIA A PROPÓSITO. Comparada con #proyectos: título más chico,
    sin degradado, sin glass, sin manchas de color detrás y con la animación
    más corta. Debe leerse como respaldo, no como otro acto principal.
--}}
<section id="sobre-mi" class="px-5 pt-20 pb-10 sm:px-8" x-data
    x-intersect.once.margin.-10%="$el.classList.add('is-in')">

    <div class="mx-auto grid max-w-5xl gap-10 md:grid-cols-[auto_1fr] md:gap-12">

        {{-- Foto --}}
        <div class="reveal justify-self-center md:justify-self-start" style="--i: 0">
            <img src="{{ asset('img/Profile2.webp') }}" alt="Retrato de {{ config('portfolio.name') }}"
                loading="lazy" decoding="async" width="176" height="176"
                class="h-36 w-36 rounded-2xl object-cover shadow-md ring-1 ring-white/70 md:h-44 md:w-44">
        </div>

        <div>
            <h2 class="reveal font-display text-2xl font-semibold text-brand-900 sm:text-3xl" style="--i: 1">
                Sobre mí
            </h2>

            <div class="reveal mt-4 space-y-3.5 text-[0.975rem] leading-relaxed text-brand-800/80" style="--i: 2">
                <p>
                    Graduada en <strong class="font-semibold text-brand-900">Ingeniería en Computación</strong> por el
                    Centro Universitario de los Altos. Me especializo en aplicaciones web modernas, combinando lógica,
                    diseño y buenas prácticas de programación.
                </p>
                <p>
                    Disfruto convertir ideas en soluciones digitales eficientes, cuidando tanto la funcionalidad como
                    la experiencia de quien las usa. Me motiva enfrentar retos nuevos, resolver problemas reales y
                    seguir creciendo dentro del desarrollo web.
                </p>
            </div>

            {{-- Educación: lista sobria, sin tarjetas --}}
            <ul class="reveal mt-7 space-y-3.5" style="--i: 3">
                @foreach ($education as $item)
                    <li class="flex gap-4 border-l-2 border-sand-200 pl-4">
                        <div class="min-w-0">
                            <p class="text-sm font-semibold text-brand-900">{{ $item['title'] }}</p>
                            <p class="text-sm text-brand-800/65">{{ $item['place'] }}</p>
                        </div>
                        <span class="ml-auto shrink-0 text-xs text-sand-500 tabular-nums">{{ $item['time'] }}</span>
                    </li>
                @endforeach
            </ul>

            {{-- Soft skills: texto, no medallas --}}
            <p class="reveal mt-7 flex flex-wrap items-center gap-x-2 gap-y-1.5 text-sm text-brand-800/70"
                style="--i: 4">
                @foreach ($softSkills as $i => $skill)
                    <span>{{ $skill }}</span>
                    @if (!$loop->last)
                        <span aria-hidden="true" class="text-sand-300">·</span>
                    @endif
                @endforeach
            </p>
        </div>
    </div>
</section>
