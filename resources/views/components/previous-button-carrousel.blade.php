 @props([
    'id_button' => ''
 ])

 
<button class="carousel-control-prev" type="button"
        data-bs-target="#{{ $id_button }}"
        data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Anterior</span>
</button>
