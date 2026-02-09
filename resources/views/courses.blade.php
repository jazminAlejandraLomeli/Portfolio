<x-layouts.app>

    @vite(['resources/css/notavailable.css'])

    <!-- Contenido de la vista -->
    <div class="card_style main-cont position-relative">

        <div>

            <x-title title="Cursos y certificaciones" />
            {{-- Introduccion a proyectos --}}
            <div class="p-3">

                <x-page-not-available title="Esta sección está en construcción"
                    text="Pronto estará disponible con una lista de mis cursos y certificaciones">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="150" height="116.66666666666666" viewBox="0 0 18 14">
                        <path fill="#E91E63"
                            d="m5.243 6.657l-4.95-4.95A1 1 0 1 1 1.707.293L7.364 5.95a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 1 1-1.414-1.414zM9 11h8a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2" />
                    </svg> --}}
                    <svg data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" class="icon-float"
                        xmlns="http://www.w3.org/2000/svg" width="150" height="116.66666666666666" viewBox="0 0 18 14">
                        <path fill="#E91E63"
                            d="m5.243 6.657l-4.95-4.95A1 1 0 1 1 1.707.293L7.364 5.95a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 1 1-1.414-1.414zM9 11h8a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2" />
                    </svg>

                </x-page-not-available>

            </div>
        </div>
    </div>

    @vite(['resources/js/experience/index.js'])
</x-layouts.app>