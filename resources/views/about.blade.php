
<x-layouts.app>

    <!-- Contenido de la vista -->
    <div class="card_style border p-3 main-cont">
        <x-title title="Educación" />

        <p class="sm-text-justify">
            Graduada del <b>Centro Universitario de los Altos</b> en Ingeniería en Computación, disfruto trabajando en
            equipo, aprovechando la diversidad de ideas y conocimientos para alcanzar soluciones creativas y eficaces.

        </p>
        <!-- Lista estudios -->
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">
                    <x-list title="Bachillerato" place="Preparatoria Regional de Tepatitlan." timeframe="2016 - 2019"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#d82d6c"
                                d="M7 12.27v3.72l5 2.73l5-2.73v-3.72L12 15zM5.18 9L12 12.72L18.82 9L12 5.28z"
                                opacity=".3" />
                            <path fill="#d82d6c"
                                d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9zm5 12.99l-5 2.73l-5-2.73v-3.72L12 15l5-2.73zm-5-3.27L5.18 9L12 5.28L18.82 9z" />
                        </svg>

                    </x-list>
                </ul>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <ul class="list-group">

                    <x-list title="Licenciatura" place="Centro Universiatrio de los Altos"
                        extras="Ingeniería en computación" description="CUAltos, Universidad de Guadalajara"
                        timeframe="2019 - 2023">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
                            <path fill="#d82d6c"
                                d="m16 3.875l-.438.219L5.563 9L5 9.281V11h22V9.281L26.437 9l-10-4.906zm0 2.25L21.875 9h-11.75zM7 12v10H6v2h20v-2h-1V12h-2v10h-2V12h-2v10h-2V12h-2v10H9V12zM4 25v2h24v-2z" />
                        </svg>

                    </x-list>


                </ul>
            </div>
        </div>

        <x-title title="Soft Skills" />


        <div>
            @include('about.container-soft-skills')
        </div>
    </div>
</x-layouts.app>