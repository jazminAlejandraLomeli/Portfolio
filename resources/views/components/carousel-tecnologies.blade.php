 @props([
    'id' => '',
    'list' => ''
 ])
 
 
 <a class="text-decoration-none text-reset btn-details d-flex justify-content-between align-items-center"
     data-bs-toggle="collapse" href="#collapse_{{ $id }}" role="button">
     <span class="fw-italic text-muted">Tecnologías implementadas</span>
     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
         <path fill="currentColor" d="m12 13.171l4.95-4.95l1.414 1.415L12 16L5.636 9.636L7.05 8.222z" />
     </svg>
 </a>

 <div class="collapse" id="collapse_{{ $id }}">
     <div class="card card-body">
         <div class="d-flex flex-wrap gap-2">
             {{-- Iterar los colores y las tecnologías --}}
             @foreach ($list as $tech)
                 <span class="badge text-bg-{{ $tech['color'] }}">
                     {{ $tech['name'] }}
                 </span>
             @endforeach

         </div>
     </div>
 </div>
