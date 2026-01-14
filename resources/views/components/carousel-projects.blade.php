{{-- Iterar todos los proyectos del archivo de configuración data-projects.php --}}
<div class="row">
    {{-- Iterar proyectos  --}}
    @foreach (config('data-projects.projects') as $project)
        <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center mt-4">

            {{-- <div class="card h-100 d-flex flex-column card-shadow"> --}}
            {{-- <div class="position-relative h-100 card-shadow  d-flex flex-column"  > --}}
            <div class="card-wrapper h-100 card-shadow">

                <div class="position-relative d-flex flex-column ">

                    {{-- CAROUSEL --}}
                    <div id="{{ $project['id'] }}" class="carousel slide img-shadow" data-bs-ride="carousel">
                        {{-- Carrousel imagenes --}}
                        <x-carousel-images :project="$project" />

                        {{-- Botones de navegación para el carrousel --}}
                        <x-previous-button-carrousel id_button="{{ $project['id'] }}" />
                        <x-next-button-carrousel id_button="{{ $project['id'] }}" />

                    </div>

                    {{-- CARD BODY --}}
                    <div class="card-body p-2 " >

                        {{-- Nombre del proyecto --}}
                        <p class="fw-bold text-center carrousel-title">{{ $project['title'] }}</p>

                        {{-- Iterar   Tecnologías --}}
                        <div>
                            <x-carousel-technologies id="{{ $project['id'] }}" :list="$project['technologies']" />
                        </div>

                        <hr class="hr-chingon">
                        <!-- Rol en el proyecto -->
                        <x-carousel-role :role="$project['role'] ?? null" :features="$project['features']['short'] ?? []" :id="$project['id']" />

                        {{-- Descripción con leer más --}}
                        {{-- <x-carousel-description id_name="{{ $project['id'] }}" text="{{ $project['description'] }}" /> --}}

                    </div>
                </div>

                {{-- Links del proyecto --}}
                <div class="mt-auto p-3" >
                    <hr class="hr-chingon">

                    <x-carousel-links :project="$project" />
                </div>
            </div>
        </div>
    @endforeach
</div>
