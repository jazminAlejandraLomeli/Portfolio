@props([
'text' => '',
'animationText' => '',
'size' => '',
'animation' => false,
])

<div class="modern-title mx-2 my-0 text-center mb-3">
    <h1
        class="
        phrase fw-normal

        @if($animation)
            animate-once
            animate__animated
            animate__fadeInDown
            animate__slow
        @endif
        ">
        {{ $text }}

        <span class="fw-bold animation @if($size) {{ $size }} @endif">
            {{ $animationText }}
        </span>
    </h1>
</div>