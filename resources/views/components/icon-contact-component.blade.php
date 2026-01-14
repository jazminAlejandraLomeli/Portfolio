@props([
    'type' => 'address',
    'id' => '',
])


<li class="d-flex justify-content-center justify-content-md-start align-items-center mt-2"
    @if ($id) id="{{ $id }}" @endif>
    <div class="pe-2">
        {{-- Aquí va el SVG u otro icono --}}
        <div class="border-end">
            {{ $slot }}
        </div>
    </div>
    @if ($type == 'phone')
        <a href="https://wa.me/523781220818?text=Hola%20Jazmín,%20vi%20tu%20portafolio%20y%20me%20gustaría%20contactarte"
            class="icon-tooltip text-decoration-none" target="_blank" rel="noopener noreferrer"
            data-tooltip="Enviame un mensaje por WhatsApp">

            <span class="ps-1 fw-semibold">
                <span class="text-primary">+52</span> &ensp;3781220818
            </span>

        </a>
    @else
        <span class="ps-1 ">
            <a class="maps" href="https://maps.app.goo.gl/vS2L648s2kqXB1zB6" target="_blank" tabindex="0">
                <span class="cont-texto">Tepatitlán de Morelos</span>
            </a>
        </span>
    @endif
</li>
