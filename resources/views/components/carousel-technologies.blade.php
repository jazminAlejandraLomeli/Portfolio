 @props([
     'id' => '',
     'list' => '',
 ])



 <span class="fw-italic text-muted">Tecnologías implementadas</span>

 <div class="d-flex flex-wrap justify-content-around gap-2 mt-2 mb-3">
     {{-- Iterar los colores y las tecnologías --}}
     @foreach ($list as $tech)
         <span class="badge bg-{{ $tech['color'] }}">
             {{ $tech['name'] }}
         </span>
     @endforeach

 </div>
