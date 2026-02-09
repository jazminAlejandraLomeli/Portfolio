
<x-layouts.app>

    @vite(['resources/css/carrousel.css'])
    <!-- Contenido de la vista -->
    <div class="card_style main-cont position-relative">

        <div>

            <x-title title="Desarrollo web" />
            {{-- Introduccion a proyectos --}}
            <div class="col-12">

                <p class="text-justify">

                    Cuento con más de 2 años de experiencia como <b> Full Stack Developer </b>, participando en el ciclo
                    completo de
                    vida del software: desde el levantamiento de requerimientos y diseño de arquitectura, hasta el
                    desarrollo front-end y back-end, pruebas, despliegue y mantenimiento.
                    <br>
                    <br>
                    Esta trayectoria me permite diseñar soluciones digitales dinámicas, escalables y centradas en la
                    experiencia del usuario.
                </p>
            </div>
        </div>

        {{-- Contenedor de los proyctos --}}
        <div class="row">
            <div class=" pt-3">
                <x-title title="Proyectos" />
            </div>
            {{-- Carousel de proyectos que se itera sobre los proyectos --}}

            <x-carousel-projects />


        </div>

    </div>

    @vite(['resources/js/experience/index.js'])
</x-layouts.app>