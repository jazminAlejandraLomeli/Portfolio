    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="justify-content-center d-flex py-2 ">
            <span class="rounded-icon frontend-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                    <path fill="#059669" fill-rule="evenodd"
                        d="M8.558 4.328a.75.75 0 0 1-.056 1.06L6.805 6.913c-.788.709-1.319 1.19-1.663 1.598c-.33.393-.402.622-.402.818s.072.424.402.817c.344.409.875.89 1.663 1.598l1.697 1.527a.75.75 0 0 1-1.004 1.115l-1.737-1.564c-.737-.662-1.347-1.212-1.767-1.71c-.44-.525-.754-1.088-.754-1.783c0-.696.313-1.259.754-1.783c.42-.499 1.03-1.048 1.767-1.711l.04-.037l1.697-1.527a.75.75 0 0 1 1.06.056m5.622-.053a.75.75 0 0 1 .532.918l-3.987 15a.75.75 0 0 1-1.45-.386l3.987-15a.75.75 0 0 1 .918-.532m1.263 6.223a.75.75 0 0 1 1.059-.055l1.737 1.563c.737.663 1.347 1.213 1.767 1.711c.44.524.754 1.088.754 1.783s-.313 1.259-.754 1.783c-.42.498-1.03 1.048-1.767 1.71l-1.737 1.565a.75.75 0 0 1-1.004-1.116l1.697-1.526c.788-.71 1.319-1.19 1.663-1.599c.33-.392.402-.622.402-.817s-.072-.425-.402-.817c-.344-.41-.875-.89-1.663-1.599l-1.697-1.527a.75.75 0 0 1-.055-1.059"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </div>
        <h1 class="title text-center">Frontend Developer</h1>


        <div class="mt-3 d-flex flex-column gap-3 container_skill">

            @foreach (config('data-skills.Frontend') as $language)
                <x-container-skill name="{{ $language['name'] }}" color="{{ $language['color'] }}"
                    porcent="{{ $language['percentage'] }}">
                    {!! $language['icon'] !!}
                </x-container-skill>
            @endforeach

        </div>

    </div>
