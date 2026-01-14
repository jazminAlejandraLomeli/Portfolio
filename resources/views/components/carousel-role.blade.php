@props([
    'role' => null,
    'features' => [],
    'id' => null,
])

<div>
    @if($role)
        <p class="mb-2 px-1">
            <span class="fw-bold">Rol:</span> {{ $role }}
        </p>
    @endif

    @if(!empty($features))
        <p class="mb-2 px-1">
            <span class="fw-bold">Aportaciones:</span>
        </p>

        <ul class="mb-2" id="features-{{ $id }}">
            @foreach ($features as $index => $feature)
                <li class="">
                    {{ $feature['name'] }}
                </li>
            @endforeach
        </ul>

         
    @endif
</div>
