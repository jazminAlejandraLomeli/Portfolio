 @props([
     'id_name' => '',
     'text' => '',
 ])



 <div class="text-justify px-1 mb-2 description" id="desc-{{ $id_name }}">
     <span class="fw-bold mb-2">Descripción </span>

     <p class="card-text desc-text " id="text-{{ $id_name }}">
         {{ $text }}
     </p>

     <div class="d-flex justify-content-end mt-2">
         {{-- <button class="read-more-btn text-center" data-target="text-{{ $id_name }}">
             Ver más
         </button> --}}
         <button type="button" class="btn btn-link p-0 text-decoration-none read-more-btn" data-target="text-{{ $id_name }}">
             Leer más
         </button>
         {{-- <button class="button-secondary read-more-btn " data-target="text-{{ $id_name }}"> Ver más</button> --}}

     </div>
 </div>
