<x-layouts.landing>

    {{-- Actos principales --}}
    <x-landing.hero />
    <x-landing.projects :projects="$projects" />

    {{-- Banda de respaldo: mismo fondo, menos peso visual. El panel claro y
         el borde superior marcan el cambio de jerarquía sin gritar. --}}
    <div class="border-t border-white/50 bg-sand-50/55 backdrop-blur-[2px]">
        <x-landing.about />
        <x-landing.stack />
    </div>

    {{-- Cierre --}}
    <x-landing.contact />

</x-layouts.landing>
