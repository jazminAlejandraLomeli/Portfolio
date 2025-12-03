
@props([
    'project' => ''
])
<div class="carousel-inner rounded">

    @foreach ($project['images'] as $index => $img)
        <div class="carousel-item @if ($index === 0) active @endif">
            <img src="{{ $img }}" class="d-block w-100 card-img-custom" alt="">
        </div>
    @endforeach

</div>
