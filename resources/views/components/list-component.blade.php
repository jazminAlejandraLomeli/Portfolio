@props([
    'title' => '',
    'place' => '',
    'extras' => '',
    'timeframe' => '',
    'color' => 'primary',
    'description' => '',
])


<li class="list-group-item d-flex justify-content-between align-items-start">
    {{-- <div class="me-auto">
        <div class="fw-bold">
            {{ $slot }}
            {{ $title }}
        </div>

        @if ($extras != '')
            <div class="row ps-2">
                <i> {{ $extras }}</i>
                <span> Centro universitario de los Altos </span>
            </div>
        @else
            <div class="row ps-2">
                <p class=" ps-2">Preparatoria Regional de Tepatitlan.</p>
        @endif
    </div> --}}

    <div class="me-auto">
        <div class="fw-bold">
            {{ $slot }}
            {{ $title }}
        </div>



        @if ($extras != '')
            <div class="row ps-2">
                <i> {{ $extras }}</i>
                <span> {{ $place }}</span>
            </div>
        @else
            <p class="ps-2">{{ $place }}</p>
        @endif

    </div>

    @if ($timeframe)
        <span class="badge bg-{{ $color }} rounded-pill">{{ $timeframe }}</span>
    @endif

</li>
