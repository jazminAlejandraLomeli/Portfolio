 <div class="card_style p-0 position-relative pb-2">

     <!-- Incluir la imagen del perfil -->
     @include('layouts.partials.aside.image')

     <!-- Contenido del card con padding-top para dar espacio a la imagen -->
     <div class="card-content">
         <h3 class="mt-4 fw-semibold title"> <span>
                 < </span>Jazmin A. Lomelí <span> / > </span></h4>
                     <p class="text-muted">Jr Full-Stack Web Developer</p>
                     <!-- <p class="phrase"> <i> "Transformando sueños en sitios web "</i></p> -->
     </div>

     <div class="modern-title mx-2 my-0 text-center mb-3">
         <h1 class="phrase fw-normal">Transformando sueños en <span class="fw-bold animation">sitios web</span></h1>
     </div>

     <!-- Descargar cv  -->
     <div class="d-flex justify-content-center align-items-center p-0 mb-3">
         <button class="button-primay">Descargar CV</button>
     </div>

     <hr class="hr-chingon">

     <p class="text-center mt-2 mb-0 fs-italic"> Redes sociales </p>
     {{-- Redes sociales  --}}
     @include('layouts.partials.aside.social-media')

     @include('layouts.partials.aside.contact-information')
    
 </div>
