@foreach (config('data-projects.projects') as $project)
    <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center mt-4">

        <div class="card card-shadow">

            {{-- CAROUSEL --}}
            <div id="{{ $project['id'] }}" class="carousel slide img-shadow" data-bs-ride="carousel">
                {{-- Carrousel imagenes --}}
                <x-carousel-images :project="$project" />

                {{-- Botones de navegación para el carrousel --}}
                <x-previous-button-carrousel id_button="{{ $project['id'] }}" />
                <x-next-button-carrousel id_button="{{ $project['id'] }}" />

            </div>

            {{-- CARD BODY --}}
            <div class="card-body">

                {{-- Nombre del proyecto --}}
                <p class="fw-bold text-center carrousel-title">{{ $project['title'] }}</p>

                {{-- Iterar Tecnologías --}}
                <x-carousel-technologies id="{{ $project['id'] }}" :list="$project['technologies']" />

                {{-- Descripción con leer más --}}
                <x-carousel-description id_name="{{ $project['id'] }}" text="{{ $project['description'] }}" />

                <x-carousel-role :role="$project['role'] ?? null" :features="$project['features'] ?? []" :id="$project['id']" />

                <div class="border d-flex justify-content-end links-projects">
                    {{-- Enlace a la página del proyecto --}}
                    <a href="{{ $project['gitHub'] }}" class="btn p-0 text-decoration-none m-2 " target="_blank"
                        rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="#333333"
                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                        </svg>
                    </a>
                    @if ($project['linkDemo'] == null || $project['linkDemo'] == '')
                        <a href="#" class="btn p-0 text-decoration-none m-2" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-custom-class="tooltip-success" title="Ver demo">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <g fill="none" stroke="#333333" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 2.05S16 6 16 12m-5 9.95S8 18 8 12s3-9.95 3-9.95M2.63 15.5H12m-9.37-7h18.74" />
                                    <path
                                        d="M21.879 17.917c.494.304.463 1.043-.045 1.101l-2.567.291l-1.151 2.312c-.228.459-.933.234-1.05-.334l-1.255-6.116c-.099-.48.333-.782.75-.525z"
                                        clip-rule="evenodd" />
                                </g>
                            </svg>
                        </a>
                    @else
                        <a href="{{ $project['linkDemo'] }}" class="btn p-0 text-decoration-none m-2 " target="_blank"
                            rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <g fill="none" stroke="#333333" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 2.05S16 6 16 12m-5 9.95S8 18 8 12s3-9.95 3-9.95M2.63 15.5H12m-9.37-7h18.74" />
                                    <path
                                        d="M21.879 17.917c.494.304.463 1.043-.045 1.101l-2.567.291l-1.151 2.312c-.228.459-.933.234-1.05-.334l-1.255-6.116c-.099-.48.333-.782.75-.525z"
                                        clip-rule="evenodd" />
                                </g>
                            </svg>
                        </a>
                    @endif
                </div>



            </div>

        </div>
    </div>
@endforeach


<script>
    document.querySelectorAll('.read-more-btn').forEach(btn => {
        const targetId = btn.getAttribute('data-target');
        const desc = document.getElementById(targetId);

        // ⭐ Detectar si el texto es más largo que el límite (3 líneas)
        const lineHeight = parseInt(window.getComputedStyle(desc).lineHeight);
        const maxHeight = lineHeight * 3;

        if (desc.scrollHeight <= maxHeight + 2) {
            // Texto corto → ocultar botón
            btn.style.display = 'none';
        }

        // Evento de leer más / leer menos
        btn.addEventListener('click', () => {
            desc.classList.toggle('expanded');

            btn.innerText = desc.classList.contains('expanded') ?
                'Leer menos' :
                'Leer más';
        });
    });
</script>
