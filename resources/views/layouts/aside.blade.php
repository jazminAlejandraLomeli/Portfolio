 <div class=" p-0 position-relative pb-0 aside-card">

     <!-- Incluir la imagen del perfil -->
     @include('layouts.partials.aside.image')

     <!-- Contenido del card con padding-top para dar espacio a la imagen -->
     <div class="card-content">
         <h1 class="mt-3 fw-semibold title">
             <span>
                 < </span>Jazmin A. Lomelí <span> / > </span>
         </h1>
         <p class="text-muted">Jr Full-Stack Web Developer</p>
         <x-title-animation text="Transformando sueños en " animationText="sitios web" />
         <!-- <p class="phrase"> <i> "Transformando sueños en sitios web "</i></p> -->
     </div>

     <!-- Descargar cv  -->
     <div class="d-flex justify-content-center align-items-center p-0 mb-3 icon-tooltip" rel="noopener noreferrer"
         data-tooltip="Ver mi CV">
         <a href="{{ asset('docs/JAZMIN_lOMELI_ZERMENO_CV.pdf') }}" class="button-primary text-decoration-none pt-1"
             target="_blank" rel="noopener noreferrer">
             Descargar CV
         </a>
     </div>

     <hr class="hr-chingon">

     {{-- Redes sociales  --}}
     @include('layouts.partials.aside.social-media')
     {{-- Información de contacto F --}}
     @include('layouts.partials.aside.contact-information')

 </div>
