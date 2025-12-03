 @props([
    'id_button' => ''
 ])
 
 <button class="carousel-control-next" type="button" data-bs-target="#{{ $id_button }}" data-bs-slide="next">
     <span class="carousel-control-next-icon"></span>
     <span class="visually-hidden">Siguiente</span>
 </button>
