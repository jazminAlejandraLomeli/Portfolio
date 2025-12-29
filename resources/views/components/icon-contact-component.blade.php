@props([
    'type' => 'address',
    'id' => '',
])


<li class="d-flex justify-content-center justify-content-md-start align-items-center mt-2"
@if($id) id="{{ $id }}" @endif>
    <div class="pe-2">
        {{-- Aquí va el SVG u otro icono --}}
        <div class="border-end">
            {{ $slot }}
        </div>
    </div>
    @if ($type == 'phone')
        <span class="ps-1 fw-semibold">
            <span class="text-primary">+52</span> &ensp;3781220818
        </span>
    @else
        <span class="ps-1 ">
             <a class="maps" href="https://maps.app.goo.gl/vS2L648s2kqXB1zB6" target="_blank" tabindex="0">
                 <span class="cont-texto">Tepatitlán de Morelos</span>
             </a>
         </span>
    @endif
</li>
