@php
    $cfg = config('portfolio');
    $msg = rawurlencode($cfg['contact_message']);

    $whatsapp = $cfg['whatsapp'] ? "https://wa.me/{$cfg['whatsapp']}?text={$msg}" : null;
    $mail = 'mailto:' . $cfg['email'] . '?subject=' . rawurlencode('Proyecto web') . '&body=' . $msg;
@endphp

<section id="contacto" class="relative isolate overflow-hidden px-5 py-24 sm:px-8" x-data
    x-intersect.once.margin.-15%="$el.classList.add('is-in')">

    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
        <div class="blob h-[24rem] w-[24rem] -top-20 left-1/4 bg-accent-300"></div>
        <div class="blob h-[22rem] w-[22rem] -bottom-24 right-1/4 bg-aqua-300" style="animation-delay: -8s"></div>
    </div>

    <div class="mx-auto max-w-3xl text-center">
        <h2 class="reveal font-display text-[clamp(1.9rem,5vw,3rem)] leading-tight font-semibold text-balance"
            style="--i: 0">
            ¿Tienes algo en mente? <span class="text-gradient-brand">Cuéntamelo.</span>
        </h2>

        <p class="reveal mx-auto mt-5 max-w-xl text-lg text-brand-800/75" style="--i: 1">
            Escríbeme con dos líneas sobre tu proyecto y te respondo con qué haría, cuánto tomaría y cuánto costaría.
            Sin compromiso.
        </p>

        <div class="reveal mt-9 flex flex-col justify-center gap-3 sm:flex-row" style="--i: 2">
            @if ($whatsapp)
                <a href="{{ $whatsapp }}" target="_blank" rel="noopener"
                    class="inline-flex items-center justify-center gap-2.5 rounded-full bg-brand-700 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-brand-700/25 transition-all duration-300 ease-soft hover:-translate-y-0.5 hover:bg-brand-800">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38a9.9 9.9 0 0 0 4.74 1.21h.01c5.46 0 9.9-4.45 9.9-9.91c0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.2 8.2 0 0 1 2.41 5.83c0 4.54-3.7 8.24-8.24 8.24a8.2 8.2 0 0 1-4.19-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.2 8.2 0 0 1-1.26-4.38c0-4.54 3.7-8.25 8.25-8.25M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.85-.87 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18c.2-.58.2-1.07.14-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43h-.47z"/></svg>
                    Escríbeme por WhatsApp
                </a>
            @endif

            <a href="{{ $mail }}"
                @class([
                    'inline-flex items-center justify-center gap-2.5 rounded-full px-7 py-3.5 text-base font-semibold transition-all duration-300 ease-soft hover:-translate-y-0.5',
                    'bg-brand-700 text-white shadow-lg shadow-brand-700/25 hover:bg-brand-800' => !$whatsapp,
                    'glass text-brand-800 hover:bg-white/80' => $whatsapp,
                ])>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M3 4a2 2 0 0 0-2 2v.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 6.162V6a2 2 0 0 0-2-2H3Z"/><path d="m19 8.839l-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z"/></svg>
                Mándame un correo
            </a>
        </div>

        {{-- Redes --}}
        <div class="reveal mt-10 flex items-center justify-center gap-5 text-sm" style="--i: 3">
            <a href="{{ $cfg['linkedin'] }}" target="_blank" rel="noopener"
                class="font-medium text-brand-700 underline-offset-4 transition hover:text-accent-600 hover:underline">LinkedIn</a>
            <span aria-hidden="true" class="text-sand-300">·</span>
            <a href="{{ $cfg['github'] }}" target="_blank" rel="noopener"
                class="font-medium text-brand-700 underline-offset-4 transition hover:text-accent-600 hover:underline">GitHub</a>
        </div>
    </div>

    <footer class="mx-auto mt-20 max-w-5xl border-t border-sand-200/70 pt-6 text-center text-xs text-brand-800/50">
        © {{ date('Y') }} {{ $cfg['name'] }} — Hecho con Laravel, Tailwind y Alpine.
    </footer>
</section>
