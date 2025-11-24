@props([
    'url' => '#',
    'icon' => '', // agrega prop para pasar el SVG
    'target' => '_blank',
])

<li class="iconos_redes mt-1">
    <a href="{{ $url }}" target="{{ $target }}" class="icono-hover d-inline-block text-decoration-none">
    {{ $slot }}
</a>

</li>
