@foreach (config('data-projects.projects') as $project)
    <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center mt-4">

        <div class="card card-shadow">

            {{-- CAROUSEL --}}
            <div id="{{ $project['id'] }}" class="carousel slide img-shadow" data-bs-ride="carousel">
                <div class="carousel-inner rounded">

                    @foreach ($project['images'] as $index => $img)
                        <div class="carousel-item @if ($index === 0) active @endif">
                            <img src="{{ $img }}" class="d-block w-100 card-img-custom" alt="">
                        </div>
                    @endforeach

                </div>

                

                <x-previous-button-carrousel-component id_button="{{ $project['id'] }}" />
                  <x-next-button-carrousel-component id_button="{{ $project['id'] }}" />
                
            </div>

            {{-- CARD BODY --}}
            <div class="card-body">
                <p class="fw-bold text-center">{{ $project['title'] }}</p>

                <p class="card-text">{{ $project['description'] }}</p>

                {{-- Desplegable de tecnologías --}}
                <a class="text-decoration-none text-reset btn-details d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" href="#collapse_{{ $project['id'] }}" role="button">
                    <span class="fw-italic">Tecnologías implementadas</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m12 13.171l4.95-4.95l1.414 1.415L12 16L5.636 9.636L7.05 8.222z" />
                    </svg>
                </a>

                <div class="collapse" id="collapse_{{ $project['id'] }}">
                    <div class="card card-body">
                        <div class="d-flex flex-wrap gap-2">
                            {{-- Iterar los colores y las tecnologías --}}
                            @foreach ($project['technologies'] as $tech)
                                <span class="badge text-bg-{{ $tech['color'] }}">
                                    {{ $tech['name'] }}
                                </span>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endforeach
