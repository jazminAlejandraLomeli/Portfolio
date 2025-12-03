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

                {{-- Descripción con leer más --}}
                <x-carousel-description id_name="{{ $project['id'] }}" text="{{ $project['description'] }}" />
                {{-- Iterar Tecnologías --}}
                <x-carousel-tecnologies id="{{ $project['id'] }}" :list="$project['technologies']" />

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
