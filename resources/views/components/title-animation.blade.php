@props(['text' => '', 'animationText' => '', 'size' => ''])



<div class="modern-title mx-2 my-0 text-center mb-3">
    <h1 class="phrase fw-normal">{{ $text }} <span class="fw-bold animation @if($size) {{ $size }} @endif">{{ $animationText }}</span></h1>
</div>
