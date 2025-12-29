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
                <li class="{{ $index >= 3 ? 'd-none extra-feature' : '' }}">
                    {{ $feature['name'] }}
                </li>
            @endforeach
        </ul>

        @if(count($features) > 3)
            <div class="d-flex justify-content-end mt-2">
                <button
                    type="button"
                    class="btn btn-link p-0 text-decoration-none read-more-btn"
                    data-target="features-{{ $id }}"
                >
                    Leer más
                </button>
            </div>
        @endif
    @endif
</div>
