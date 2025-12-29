@props([
    'texto' => '',
])


<li class="list-group-item">
    <div class="d-flex align-items-center gap-2">
        {{ $slot }}
        <span> {{ $texto }}
        </span>
    </div>
</li>
