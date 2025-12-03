 @props([
     'id_name' => '',
     'text' => '',
 ])


 <div class="text-justify px-1 mb-2 description" id="desc-{{ $id_name }}">
     <p class="card-text desc-text " id="text-{{ $id_name }}">
         {{ $text }}
     </p>

     <div class="d-flex justify-content-center mt-2">
         <button class="read-more-btn text-center" data-target="text-{{ $id_name }}">
             Ver más
         </button>
     </div>
 </div>
