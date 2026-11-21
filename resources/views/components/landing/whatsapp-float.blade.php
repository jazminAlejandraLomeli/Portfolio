@php
    $cfg = config('portfolio');
    $href = $cfg['whatsapp']
        ? 'https://api.whatsapp.com/send?phone=' . $cfg['whatsapp'] . '&text=' . rawurlencode($cfg['contact_message'])
        : null;
@endphp

{{--
    Botón flotante de WhatsApp. Aparece al pasar el inicio (ahí ya está el
    botón "Hablemos de tu proyecto") y se queda a la mano en el resto de la
    página. El mensaje precargado menciona el portafolio.
--}}
@if ($href)
    <a href="{{ $href }}" target="_blank" rel="noopener" aria-label="Escríbeme por WhatsApp"
        x-data="{
            show: false,
            init() {
                const check = () => (this.show = window.scrollY > window.innerHeight * 0.6);
                check();
                window.addEventListener('scroll', check, { passive: true });
            },
        }"
        x-cloak
        :class="show ? 'opacity-100 translate-y-0' : 'pointer-events-none opacity-0 translate-y-3'"
        class="wa-float group fixed z-40 inline-flex items-center gap-2.5 rounded-full bg-[#13804a] py-3 pr-3 pl-3 text-white shadow-[0_14px_34px_-12px_rgb(14_18_64/0.55)] transition-all duration-500 ease-soft hover:bg-[#0f6b3d] sm:pr-5 sm:pl-4 motion-reduce:transition-none"
        style="right: max(1.25rem, env(safe-area-inset-right)); bottom: max(1.25rem, env(safe-area-inset-bottom));">
        <x-landing.whatsapp-icon class="h-7 w-7 sm:h-6 sm:w-6" />
        <span class="hidden text-sm font-semibold sm:inline">¿Platicamos?</span>
    </a>
@endif
