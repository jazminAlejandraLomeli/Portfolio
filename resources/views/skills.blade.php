

<x-layouts.app>
    @vite(['resources/css/carrousel.css', 'resources/css/skills.css'])
    <!-- Contenido de la vista -->
    <div class="card_style position-relative">

        <div>
            <x-title title="Lenguajes de programación y Frameworks" />

            <div class="row g-md-3 p-3">
                <!-- Habilidades del frontend -->
                <x-container-fronted-skills />
                <!-- Habilidaees del backend -->
                <x-container-backend-skills />
                <!-- Habilidades de bases de datos -->
                <x-container-develop-tools />

                {{-- Conceptos --}}
                <div class=" mt-1">

                    <h2 class="title-2 text-center">Conceptos clave</h2>

                    <div class="fluid mt-2">
                        <div class="mt-2 row d-flex container_skill p-3 border border-2 rounded-3 shadow-sm">

                            @foreach (config('data-skills.concepts') as $concept)
                            <!-- Texto superior -->
                            <div class="col-12 col-md-6 col-xl-4 d-flex align-items-center gap-3 mb-2">
                                <span class="fw-normal">
                                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        viewBox="0 0 24 24">
                                        <path fill="#025f2a"
                                            d="M8 5.072a8 8 0 1 1-3.995 7.213L4 12l.005-.285A8 8 0 0 1 8 5.072" />
                                    </svg>

                                    {{ $concept['name'] }}</span>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</x-layouts.app>
