@props(['tech'])

@php
    // Los colores viven en config/tech-colors.php (fuente única).
    $classes = config('tech-colors.' . strtolower($tech['color']), config('tech-colors.default'));
@endphp

<span {{ $attributes->class(['inline-flex items-center rounded-full px-3 py-1 text-xs font-medium ring-1 ring-inset whitespace-nowrap', $classes]) }}>
    {{ $tech['name'] }}
</span>
