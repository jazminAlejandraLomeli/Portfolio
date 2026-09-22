@php
    $cfg = config('portfolio');

    // Revelación palabra por palabra: partimos el titular y damos a cada
    // palabra su propio índice --i, que la hoja de estilos usa como delay.
    $headline = 'Convierto ideas en productos web que se sienten vivos.';
    $words = preg_split('/\s+/', $headline);

    // Las últimas N palabras van dentro de UN solo span con degradado, para
    // que el gradiente recorra la frase completa y no se repita por palabra.
    $highlightFrom = count($words) - 2;
    $plain = array_slice($words, 0, $highlightFrom);
    $highlight = array_slice($words, $highlightFrom);

    // Subtítulo dinámico (rota solo)
    $roles = [
        'Full-Stack Web Developer',
        'Especialista en UI/UX interactivo',
        'Laravel · Livewire · Tailwind CSS',
        'Backend robusto, frontend con alma',
    ];

    $waMessage = rawurlencode($cfg['contact_message']);
    $contactHref = $cfg['whatsapp']
        ? "https://wa.me/{$cfg['whatsapp']}?text={$waMessage}"
        : 'mailto:' . $cfg['email'] . '?subject=' . rawurlencode('Proyecto web') . '&body=' . $waMessage;
@endphp

<section id="inicio" class="relative isolate flex min-h-[100svh] items-center overflow-hidden px-5 py-24 sm:px-8"
    x-data x-init="$nextTick(() => $el.classList.add('is-in'))">

    {{-- Mesh decorativo: refuerza el degradado del fondo de marca --}}
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
        <div class="blob h-[26rem] w-[26rem] -top-24 -left-20 bg-accent-300"></div>
        <div class="blob h-[30rem] w-[30rem] top-1/3 -right-28 bg-aqua-300" style="animation-delay: -6s"></div>
        <div class="blob h-[22rem] w-[22rem] -bottom-24 left-1/3 bg-brand-300" style="animation-delay: -11s"></div>
    </div>

    <div class="mx-auto w-full max-w-5xl">

        {{-- A. Badge de disponibilidad --}}
        @if ($cfg['available'])
            <p class="reveal inline-flex items-center gap-2.5 rounded-full glass px-4 py-2 text-sm font-medium text-brand-800"
                style="--i: 0">
                <span class="dot-live inline-block h-2.5 w-2.5 rounded-full bg-green-500"></span>
                {{ $cfg['available_label'] }}
            </p>
        @endif

        {{-- B. Titular con revelación palabra por palabra --}}
        <h1 class="mt-7 font-display text-[clamp(2.4rem,7vw,4.75rem)] leading-[1.05] font-semibold tracking-tight text-balance">
            @foreach ($plain as $i => $word)
                <span class="reveal-word" style="--i: {{ $i + 2 }}">{{ $word }}</span>{{ ' ' }}
            @endforeach
            <span class="text-gradient-brand">
                @foreach ($highlight as $i => $word)
                    <span class="reveal-word" style="--i: {{ $highlightFrom + $i + 2 }}">{{ $word }}</span>{{ ' ' }}
                @endforeach
            </span>
        </h1>

        {{-- C. Subtítulo dinámico --}}
        <div class="reveal mt-7 max-w-2xl text-lg leading-relaxed text-brand-800/85 sm:text-xl"
            style="--i: {{ count($words) + 3 }}">
            <p>
                Soy <strong class="font-semibold text-brand-900">{{ $cfg['name'] }}</strong>, desarrolladora web
                mexicana. Diseño la interfaz y construyo el backend: una sola persona responsable de que el producto se
                vea bien <em>y</em> aguante.
            </p>

            <p class="mt-4 flex flex-wrap items-baseline gap-x-2 font-medium text-brand-700"
                x-data="{
                    roles: @js($roles),
                    i: 0,
                    shown: true,
                    start() {
                        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
                        setInterval(() => {
                            this.shown = false;
                            setTimeout(() => {
                                this.i = (this.i + 1) % this.roles.length;
                                this.shown = true;
                            }, 320);
                        }, 3200);
                    },
                }"
                x-init="start()">
                <span class="text-brand-500">Actualmente:</span>
                <span class="inline-block transition-all duration-300 ease-soft"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-1.5'"
                    x-text="roles[i]">{{ $roles[0] }}</span>
            </p>
        </div>

        {{-- D. CTAs --}}
        <div class="reveal mt-10 flex flex-col gap-3 sm:flex-row sm:items-center"
            style="--i: {{ count($words) + 4 }}">

            <a href="#proyectos"
                class="group inline-flex items-center justify-center gap-2 rounded-full bg-brand-700 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-brand-700/25 transition-all duration-300 ease-soft hover:-translate-y-0.5 hover:bg-brand-800 hover:shadow-xl hover:shadow-brand-700/35 active:translate-y-0">
                Explorar proyectos
                <svg class="h-4 w-4 transition-transform duration-300 ease-soft group-hover:translate-y-0.5"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 3a.75.75 0 0 1 .75.75v9.44l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V3.75A.75.75 0 0 1 10 3Z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            <a href="{{ $contactHref }}" @if ($cfg['whatsapp']) target="_blank" rel="noopener" @endif
                class="inline-flex items-center justify-center gap-2 rounded-full glass px-7 py-3.5 text-base font-semibold text-brand-800 transition-all duration-300 ease-soft hover:-translate-y-0.5 hover:bg-white/80">
                <svg class="h-4.5 w-4.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M3 4a2 2 0 0 0-2 2v.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 6.162V6a2 2 0 0 0-2-2H3Z" />
                    <path d="m19 8.839l-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                </svg>
                Hablemos de tu proyecto
            </a>
        </div>

        {{-- E. Prueba social ligera --}}
        <dl class="reveal mt-14 grid max-w-xl grid-cols-3 gap-4" style="--i: {{ count($words) + 5 }}">
            @foreach ([['3+', 'sistemas en producción'], ['Full', 'stack, de UI a deploy'], ['100%', 'responsive y accesible']] as $stat)
                <div class="rounded-2xl glass px-4 py-4">
                    <dt class="font-display text-2xl font-semibold text-brand-700">{{ $stat[0] }}</dt>
                    <dd class="mt-1 text-xs leading-snug text-brand-800/70">{{ $stat[1] }}</dd>
                </div>
            @endforeach
        </dl>
    </div>

    {{-- F. Indicador de scroll --}}
    <div aria-hidden="true" class="absolute inset-x-0 bottom-7 flex justify-center">
        <span class="scroll-cue text-brand-700/50">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </span>
    </div>
</section>
