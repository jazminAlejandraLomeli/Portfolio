    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div>
            <div class="justify-content-center d-flex py-2 ">
                <span class="rounded-icon  database-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#E91E63" d="M1.463.857L5.446 4.84l-.606.606L.857 1.463v3.251H0V.43A.43.43 0 0 1 .429 0h4.285v.857ZM24 .43v4.285h-.857v-3.25l-3.983 3.98l-.606-.606L22.537.857h-3.251V0h4.285c.237 0 .429.192.429.429Zm-.857 18.857H24v4.285a.43.43 0 0 1-.429.429h-4.285v-.857h3.25l-3.982-3.983l.606-.606l3.983 3.983Zm-.214-7.623c0-1.423-1.643-2.828-4.393-3.76l.274-.811c3.162 1.07 4.976 2.736 4.976 4.57c0 1.836-1.814 3.502-4.976 4.572l-.275-.812c2.751-.931 4.394-2.336 4.394-3.76Zm-21.834 0c0 1.363 1.538 2.73 4.113 3.66l-.291.806C1.944 15.057.238 13.43.238 11.664S1.944 8.27 4.917 7.197l.291.806c-2.575.93-4.113 2.297-4.113 3.66Zm4.35 7.497l-3.982 3.983h3.251V24H.43a.43.43 0 0 1-.43-.429v-4.285h.857v3.25l3.983-3.982ZM12 8.265c-3.063 0-4.714-.79-4.714-1.114c0-.323 1.651-1.114 4.714-1.114c3.062 0 4.714.79 4.714 1.114c0 .323-1.652 1.114-4.714 1.114m.012 3.32c-2.932 0-4.726-.801-4.726-1.237V8.265c1.055.582 2.928.858 4.714.858s3.659-.276 4.714-.858v2.083c0 .436-1.785 1.237-4.702 1.237m0 3.272c-2.932 0-4.726-.8-4.726-1.237v-2.108c1.042.613 2.89.93 4.726.93c1.827 0 3.664-.317 4.702-.928v2.106c0 .437-1.785 1.237-4.702 1.237M12 17.793c-3.05 0-4.714-.82-4.714-1.24v-1.768c1.042.612 2.89.93 4.726.93c1.827 0 3.664-.317 4.702-.928v1.765c0 .422-1.664 1.241-4.714 1.241M12 5.18c-2.683 0-5.571.616-5.571 1.971v9.401c0 1.378 2.802 2.099 5.571 2.099s5.571-.721 5.571-2.099v-9.4c0-1.356-2.888-1.972-5.571-1.972"/></svg>
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



         <div>
            <div class="justify-content-center d-flex py-2 ">
                <span class="rounded-icon  tools-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#059db1" d="M5.59 3.41L7 4.82L3.82 8L7 11.18L5.59 12.6L1 8zm5.82 0L16 8l-4.59 4.6L10 11.18L13.18 8L10 4.82zM22 6v12c0 1.11-.89 2-2 2H4a2 2 0 0 1-2-2v-4h2v4h16V6h-2.97V4H20c1.11 0 2 .89 2 2"/></svg>                 </span>
                </div>

            <h2 class="title text-center">Herramientas</h2>   

            <div class="mt-3 d-flex flex-column gap-3 container_skill p-3 border border-2 rounded-3 shadow-sm">

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
