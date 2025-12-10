@props([
    'name' => '',
    'color' => '',
    'porcent' => ''
])

<div class="p-3 border border-2 rounded-3 shadow-sm">

    <!-- Texto superior -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="fw-semibold">{{ $name }}</span>
        <span class="text-muted">{!! $slot !!}</span>
    </div>

    <!-- Barra de progreso -->
    <div class="progress" style="height: 6px;">
        <div class="progress-bar"
             role="progressbar"
             style="width: {{ $porcent }}%; background: {{ $color }};">
        </div>
    </div>

</div>
