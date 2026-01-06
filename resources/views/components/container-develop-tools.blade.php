    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div>
            <div class="justify-content-center d-flex py-2 ">
                <span class="rounded-icon  database-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                        <path fill="#E91E63"
                            d="M1.463.857L5.446 4.84l-.606.606L.857 1.463v3.251H0V.43A.43.43 0 0 1 .429 0h4.285v.857ZM24 .43v4.285h-.857v-3.25l-3.983 3.98l-.606-.606L22.537.857h-3.251V0h4.285c.237 0 .429.192.429.429Zm-.857 18.857H24v4.285a.43.43 0 0 1-.429.429h-4.285v-.857h3.25l-3.982-3.983l.606-.606l3.983 3.983Zm-.214-7.623c0-1.423-1.643-2.828-4.393-3.76l.274-.811c3.162 1.07 4.976 2.736 4.976 4.57c0 1.836-1.814 3.502-4.976 4.572l-.275-.812c2.751-.931 4.394-2.336 4.394-3.76Zm-21.834 0c0 1.363 1.538 2.73 4.113 3.66l-.291.806C1.944 15.057.238 13.43.238 11.664S1.944 8.27 4.917 7.197l.291.806c-2.575.93-4.113 2.297-4.113 3.66Zm4.35 7.497l-3.982 3.983h3.251V24H.43a.43.43 0 0 1-.43-.429v-4.285h.857v3.25l3.983-3.982ZM12 8.265c-3.063 0-4.714-.79-4.714-1.114c0-.323 1.651-1.114 4.714-1.114c3.062 0 4.714.79 4.714 1.114c0 .323-1.652 1.114-4.714 1.114m.012 3.32c-2.932 0-4.726-.801-4.726-1.237V8.265c1.055.582 2.928.858 4.714.858s3.659-.276 4.714-.858v2.083c0 .436-1.785 1.237-4.702 1.237m0 3.272c-2.932 0-4.726-.8-4.726-1.237v-2.108c1.042.613 2.89.93 4.726.93c1.827 0 3.664-.317 4.702-.928v2.106c0 .437-1.785 1.237-4.702 1.237M12 17.793c-3.05 0-4.714-.82-4.714-1.24v-1.768c1.042.612 2.89.93 4.726.93c1.827 0 3.664-.317 4.702-.928v1.765c0 .422-1.664 1.241-4.714 1.241M12 5.18c-2.683 0-5.571.616-5.571 1.971v9.401c0 1.378 2.802 2.099 5.571 2.099s5.571-.721 5.571-2.099v-9.4c0-1.356-2.888-1.972-5.571-1.972" />
                    </svg>
                </span>
            </div>

            <h2 class="title text-center">Bases de datos</h2>


            <div class="mt-3 d-flex flex-column gap-3 container_skill">

                @foreach (config('data-skills.databases') as $language)
                    <x-container-skill name="{{ $language['name'] }}" color="{{ $language['color'] }}"
                        porcent="{{ $language['percentage'] }}">
                        {!! $language['icon'] !!}
                    </x-container-skill>
                @endforeach

            </div>
        </div>

        {{-- Herramientas --}}

        <div class="mt-3">
            <div class="d-flex flex-row align-items-center gap-3">
                <div class="justify-content-center d-flex py-1">
         <span class="rounded-icon-2 frontend-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                      <path fill="#059669"
                      d="M3.5 1A2.5 2.5 0 0 0 1 3.5v7A2.5 2.5 0 0 0 3.5 13h1.992a2.5 2.5 0 0 1 .242-.28l.72-.72H3.5A1.5 1.5 0 0 1 2 10.5V5h10v.026a4.5 4.5 0 0 1 1 .004V3.5A2.5 2.5 0 0 0 10.5 1zm5.431 5.724l-.577-.578a.5.5 0 1 0-.708.708l.745.744q.216-.461.54-.874m-2.577.13a.5.5 0 1 0-.708-.708l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L4.707 8.5zm6.538-.83c.366.042.471.48.21.742l-.975.975a1.507 1.507 0 1 0 2.132 2.132l.975-.975c.261-.261.7-.156.742.21a3.518 3.518 0 0 1-4.676 3.723l-2.726 2.727a1.507 1.507 0 1 1-2.132-2.132L9.168 10.7a3.518 3.518 0 0 1 3.724-4.676" />
                        </svg>
                    </span>
                </div>

                <h2 class="title-2 text-center">Herramientas Dev</h2>

            </div>
            <div class="mt-2 d-flex flex-column gap-3 container_skill p-3 border border-2 rounded-3 shadow-sm">

                @foreach (config('data-skills.tools') as $tool)
                    <!-- Texto superior -->
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-semibold">{{ $tool['name'] }}</span>
                        <span class="text-muted">{!! $tool['icon'] !!}</span>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
