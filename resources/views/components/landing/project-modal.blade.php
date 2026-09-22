@props(['projects'])

@php
    // Los colores viven en config/tech-colors.php (fuente única, igual que
    // <x-landing.tech-badge>). Aquí los resolvemos en PHP para que Alpine
    // solo tenga que pintar una cadena de clases ya calculada.
    $badgeDefault = config('tech-colors.default');

    // Payload mínimo para el cliente, indexado por id.
    $payload = collect($projects)
        ->keyBy('id')
        ->map(fn ($p) => [
            'title' => $p['title'],
            'category' => $p['category'] ?? 'Proyecto',
            'year' => $p['year'] ?? '',
            'role' => $p['role'] ?? '',
            'description' => $p['description'],
            'problem' => $p['problem'] ?? '',
            'architecture' => $p['architecture'] ?? '',
            'images' => collect($p['images'] ?? [])
                ->map(fn ($img) => \Illuminate\Support\Str::startsWith($img, ['http://', 'https://']) ? $img : asset($img))
                ->values(),
            'features' => $p['features']['full'] ?? [],
            'gitHub' => $p['gitHub'] ?? '',
            'linkDemo' => $p['linkDemo'] ?? '',
            'technologies' => collect($p['technologies'])
                ->map(fn ($t) => [
                    'name' => $t['name'],
                    'class' => config('tech-colors.' . strtolower($t['color']), $badgeDefault),
                ])
                ->values(),
        ]);
@endphp

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('projectModal', {
            items: @js($payload),
            current: null,
            open: false,

            show(id) {
                this.current = this.items[id] ?? null;
                if (!this.current) return;
                this.open = true;
                document.body.style.overflow = 'hidden';
            },

            hide() {
                if (!this.open) return;
                this.open = false;
                document.body.style.overflow = '';
                // Esperamos a que termine la transición de salida para
                // limpiar; así el contenido no desaparece a medio cerrar.
                setTimeout(() => { if (!this.open) this.current = null; }, 300);
            },
        });

        // Bottom sheet deslizable: solo se activa en móvil (<768px).
        Alpine.data('sheetDrag', () => ({
            y: 0,
            dragging: false,
            startY: 0,

            get style() {
                return this.dragging ? `transform: translateY(${this.y}px); transition: none` : '';
            },

            down(e) {
                if (window.innerWidth >= 768) return;
                this.dragging = true;
                this.startY = e.clientY;
                e.currentTarget.setPointerCapture(e.pointerId);
            },

            move(e) {
                if (!this.dragging) return;
                // Solo permitimos arrastrar hacia abajo.
                this.y = Math.max(0, e.clientY - this.startY);
            },

            up() {
                if (!this.dragging) return;
                this.dragging = false;
                if (this.y > 120) Alpine.store('projectModal').hide();
                this.y = 0;
            },
        }));

        // Carrusel con scroll-snap: nada de librerías, solo scrollBy.
        Alpine.data('gallery', () => ({
            slide(dir) {
                const track = this.$refs.track;
                track.scrollBy({ left: dir * track.clientWidth, behavior: 'smooth' });
            },
        }));
    });
</script>

<div x-data x-cloak x-show="$store.projectModal.open" @keydown.escape.window="$store.projectModal.hide()"
    class="fixed inset-0 z-50 flex items-end justify-center md:items-center md:p-6" role="dialog" aria-modal="true"
    :aria-label="$store.projectModal.current?.title">

    {{-- Backdrop --}}
    <div x-show="$store.projectModal.open" x-transition.opacity.duration.300ms
        @click="$store.projectModal.hide()" class="absolute inset-0 bg-brand-950/55 backdrop-blur-sm"></div>

    {{-- Panel: bottom sheet en móvil, tarjeta flotante en desktop --}}
    <div x-data="sheetDrag" x-trap="$store.projectModal.open" x-show="$store.projectModal.open"
        x-transition:enter="transition duration-400 ease-sheet"
        x-transition:enter-start="translate-y-full opacity-0 md:translate-y-4 md:scale-95"
        x-transition:enter-end="translate-y-0 opacity-100 md:scale-100"
        x-transition:leave="transition duration-250 ease-sheet"
        x-transition:leave-start="translate-y-0 opacity-100 md:scale-100"
        x-transition:leave-end="translate-y-full opacity-0 md:translate-y-4 md:scale-95"
        :style="style"
        class="relative flex max-h-[93svh] w-full flex-col overflow-hidden rounded-t-sheet glass-strong md:max-h-[86vh] md:max-w-3xl md:rounded-card">

        {{-- Asa de arrastre (solo móvil) --}}
        <div @pointerdown="down" @pointermove="move" @pointerup="up" @pointercancel="up"
            class="flex shrink-0 cursor-grab touch-none justify-center pt-3 pb-1 active:cursor-grabbing md:hidden">
            <span class="h-1.5 w-11 rounded-full bg-sand-300"></span>
        </div>

        {{-- Cerrar --}}
        <button type="button" @click="$store.projectModal.hide()" aria-label="Cerrar ficha del proyecto"
            class="absolute top-4 right-4 z-20 grid h-10 w-10 place-items-center rounded-full bg-white/80 text-brand-800 shadow-sm transition hover:bg-white hover:text-accent-600">
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path
                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
            </svg>
        </button>

        <template x-if="$store.projectModal.current">
            <div class="min-h-0 flex-1 overflow-y-auto overscroll-contain">

                {{-- Galería --}}
                <div x-data="gallery" class="relative bg-sand-100">
                    <div x-ref="track"
                        class="no-scrollbar flex snap-x snap-mandatory overflow-x-auto scroll-smooth">
                        <template x-for="(img, i) in $store.projectModal.current.images" :key="i">
                            <div class="aspect-[16/9] w-full shrink-0 snap-center">
                                <img :src="img" :alt="`Captura ${i + 1} de ${$store.projectModal.current.title}`"
                                    loading="lazy" decoding="async" class="h-full w-full object-cover">
                            </div>
                        </template>
                    </div>

                    <template x-if="$store.projectModal.current.images.length > 1">
                        <div class="pointer-events-none absolute inset-x-3 top-1/2 flex -translate-y-1/2 justify-between">
                            <button type="button" @click="slide(-1)" aria-label="Captura anterior"
                                class="pointer-events-auto grid h-9 w-9 place-items-center rounded-full bg-white/85 text-brand-800 shadow transition hover:bg-white">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 0 1 0 1.06L9.06 10l3.73 3.71a.75.75 0 1 1-1.06 1.06l-4.25-4.24a.75.75 0 0 1 0-1.06l4.25-4.24a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"/></svg>
                            </button>
                            <button type="button" @click="slide(1)" aria-label="Captura siguiente"
                                class="pointer-events-auto grid h-9 w-9 place-items-center rounded-full bg-white/85 text-brand-800 shadow transition hover:bg-white">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 0 1 0-1.06L10.94 10 7.21 6.29a.75.75 0 1 1 1.06-1.06l4.25 4.24a.75.75 0 0 1 0 1.06l-4.25 4.24a.75.75 0 0 1-1.06 0Z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </template>
                </div>

                {{-- Ficha técnica --}}
                <div class="p-6 sm:p-9">
                    <p class="flex flex-wrap items-center gap-2 text-xs font-medium tracking-wide text-brand-500 uppercase">
                        <span x-text="$store.projectModal.current.category"></span>
                        <span aria-hidden="true" class="text-sand-300">·</span>
                        <span x-text="$store.projectModal.current.year"></span>
                    </p>

                    <h2 class="mt-2 font-display text-3xl font-semibold text-brand-900 sm:text-4xl"
                        x-text="$store.projectModal.current.title"></h2>

                    <p class="mt-1.5 text-sm font-medium text-accent-600" x-text="$store.projectModal.current.role"></p>

                    <p class="mt-5 leading-relaxed text-brand-800/85" x-text="$store.projectModal.current.description"></p>

                    {{-- Tecnologías --}}
                    <h3 class="mt-8 text-sm font-semibold tracking-wide text-brand-900 uppercase">Stack</h3>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <template x-for="tech in $store.projectModal.current.technologies" :key="tech.name">
                            <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium ring-1 ring-inset"
                                :class="tech.class" x-text="tech.name"></span>
                        </template>
                    </div>

                    {{-- Problema --}}
                    <template x-if="$store.projectModal.current.problem">
                        <div class="mt-8 rounded-2xl border-l-4 border-accent-400 bg-white/55 p-5">
                            <h3 class="text-sm font-semibold tracking-wide text-brand-900 uppercase">El problema</h3>
                            <p class="mt-2 leading-relaxed text-brand-800/85" x-text="$store.projectModal.current.problem"></p>
                        </div>
                    </template>

                    {{-- Arquitectura --}}
                    <template x-if="$store.projectModal.current.architecture">
                        <div class="mt-4 rounded-2xl border-l-4 border-aqua-400 bg-white/55 p-5">
                            <h3 class="text-sm font-semibold tracking-wide text-brand-900 uppercase">Arquitectura</h3>
                            <p class="mt-2 leading-relaxed text-brand-800/85" x-text="$store.projectModal.current.architecture"></p>
                        </div>
                    </template>

                    {{-- Lo que construí --}}
                    <h3 class="mt-8 text-sm font-semibold tracking-wide text-brand-900 uppercase">Lo que construí</h3>
                    <ul class="mt-3 grid gap-2.5 sm:grid-cols-2">
                        <template x-for="feature in $store.projectModal.current.features" :key="feature">
                            <li class="flex items-start gap-2.5 text-sm text-brand-800/85">
                                <svg class="mt-0.5 h-4 w-4 shrink-0 text-aqua-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0l-3.5-3.5a1 1 0 1 1 1.4-1.4l2.8 2.79 6.8-6.79a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>
                                <span x-text="feature"></span>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </template>

        {{-- Acciones fijas al pie: siempre alcanzables con el pulgar --}}
        <div class="shrink-0 border-t border-white/60 bg-white/70 p-4 pb-[max(1rem,env(safe-area-inset-bottom))] backdrop-blur sm:px-9">
            <div class="flex flex-col gap-2.5 sm:flex-row">
                <template x-if="$store.projectModal.current?.linkDemo">
                    <a :href="$store.projectModal.current.linkDemo" target="_blank" rel="noopener"
                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-full bg-brand-700 px-6 py-3 text-sm font-semibold text-white transition hover:bg-brand-800">
                        Ver demo en vivo
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M11 3a1 1 0 1 0 0 2h1.59l-5.3 5.29a1 1 0 1 0 1.42 1.42L14 6.41V8a1 1 0 1 0 2 0V4a1 1 0 0 0-1-1h-4Z"/><path d="M5 5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-3a1 1 0 1 0-2 0v3H5V7h3a1 1 0 0 0 0-2H5Z"/></svg>
                    </a>
                </template>

                <template x-if="$store.projectModal.current?.gitHub">
                    <a :href="$store.projectModal.current.gitHub" target="_blank" rel="noopener"
                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-full bg-sand-100 px-6 py-3 text-sm font-semibold text-brand-800 transition hover:bg-sand-200">
                        Ver repositorio
                    </a>
                </template>

                <template x-if="!$store.projectModal.current?.linkDemo && !$store.projectModal.current?.gitHub">
                    <p class="flex-1 py-3 text-center text-sm text-brand-800/60">Proyecto privado — puedo mostrarlo en una llamada.</p>
                </template>
            </div>
        </div>
    </div>
</div>
