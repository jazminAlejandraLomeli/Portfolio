 
 <br> 
<div class="navigation m-2 m-sm-0 px-3">
     <ul class="mx-2 list-unstyled d-flex justify-content-around align-items-between gap-1 mb-0">
         <li class="menu">

             <a wire:navigate.hover href="{{ route('home') }}"
                 class="text-decoration-none d-flex flex-column align-items-center">
                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                     <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2">
                         <path d="M5 12H3l9-9l9 9h-2M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7" />
                         <path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6" />
                     </g>
                 </svg>
                 <span>Inicio</span>
             </a>
         </li>
         <li class="menu">
             <a wire:navigate.hover href="{{ route('about') }}"
                 class="text-decoration-none d-flex flex-column align-items-center">

                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 48 48">
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         d="M38.5 5.5h-29a4 4 0 0 0-4 4v29a4 4 0 0 0 4 4h29a4 4 0 0 0 4-4v-29a4 4 0 0 0-4-4" />
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         d="M21.72 5.5h4.56v8.554h-4.56z" />
                     <circle cx="18.869" cy="23.804" r="3.28" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" />
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         d="M12.477 35.477a6.392 6.392 0 1 1 12.785 0zm15.205-6.393h7.841m-7.841-4h7.841m-7.841 8h7.841" />
                 </svg>
                 <span>Sobre mí</span>
             </a>
         </li>
         <li class="menu">
             <a wire:navigate.hover href="{{ route('skills') }}"
                 class="text-decoration-none d-flex flex-column align-items-center">
                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2" d="m7 8l-4 4l4 4m10-8l4 4l-4 4M14 4l-4 16" />
                 </svg>
                 <span>Habilidades</span></a>
         </li>
         <li class="menu">
             <a wire:navigate.hover href="{{ route('experience') }}"
                 class="text-decoration-none d-flex flex-column align-items-center">

                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                     <path fill="none" stroke="currentColor" stroke-width="1.5"
                         d="M2 18c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C3.689 14 4.46 14 6 14s2.31 0 2.876.347c.317.194.583.46.777.777C10 15.689 10 16.46 10 18s0 2.31-.347 2.877c-.194.316-.46.582-.777.776C8.311 22 7.54 22 6 22s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.776C2 20.31 2 19.54 2 18Zm12 0c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C15.689 14 16.46 14 18 14s2.31 0 2.877.347c.316.194.582.46.776.777C22 15.689 22 16.46 22 18s0 2.31-.347 2.877a2.36 2.36 0 0 1-.776.776C20.31 22 19.54 22 18 22s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.776C14 20.31 14 19.54 14 18ZM2 6c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C3.689 2 4.46 2 6 2s2.31 0 2.876.347c.317.194.583.46.777.777C10 3.689 10 4.46 10 6s0 2.31-.347 2.876c-.194.317-.46.583-.777.777C8.311 10 7.54 10 6 10s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.777C2 8.311 2 7.54 2 6Zm12 0c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C15.689 2 16.46 2 18 2s2.31 0 2.877.347c.316.194.582.46.776.777C22 3.689 22 4.46 22 6s0 2.31-.347 2.876c-.194.317-.46.583-.776.777C20.31 10 19.54 10 18 10s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.777C14 8.311 14 7.54 14 6Z" />
                 </svg>
                 <span>Experiencia</span></a>
         </li>
         <li class="menu">
             <a wire:navigate.hover href="{{ route('courses') }}"
                 class="text-decoration-none d-flex flex-column align-items-center">

                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                     <path fill="currentColor" fill-rule="evenodd"
                         d="M7.945 1.25h8.11c1.367 0 2.47 0 3.337.117c.9.12 1.658.38 2.26.981c.602.602.86 1.36.982 2.26c.116.867.116 1.97.116 3.337v4.11c0 1.367 0 2.47-.116 3.337c-.122.9-.38 1.658-.982 2.26c-.498.498-1.105.763-1.816.907c-.69.14-1.523.176-2.508.187h-.23a2.5 2.5 0 0 1-.473.85a.96.96 0 0 0-.226.546a2.46 2.46 0 0 1-2.257 2.257a.96.96 0 0 0-.546.226a2.46 2.46 0 0 1-3.192 0a.96.96 0 0 0-.546-.226A2.46 2.46 0 0 1 7.6 20.142a.96.96 0 0 0-.226-.546a2.5 2.5 0 0 1-.472-.848c-1.04-.007-1.911-.036-2.627-.167c-.758-.14-1.403-.404-1.928-.93c-.602-.601-.86-1.36-.981-2.26c-.117-.866-.117-1.969-.117-3.336v-4.11c0-1.367 0-2.47.117-3.337c.12-.9.38-1.658.981-2.26c.602-.602 1.36-.86 2.26-.981c.867-.117 1.97-.117 3.337-.117m-1.04 15.998c.096-.302.253-.59.47-.844a.96.96 0 0 0 .226-.546A2.46 2.46 0 0 1 9.858 13.6a.96.96 0 0 0 .546-.227a2.46 2.46 0 0 1 3.192 0a.96.96 0 0 0 .546.227a2.46 2.46 0 0 1 2.257 2.257a.96.96 0 0 0 .226.546c.217.254.373.54.47.842h.22c.985-.01 1.687-.048 2.222-.156c.514-.105.822-.267 1.054-.499c.277-.277.457-.665.556-1.4c.101-.755.103-1.756.103-3.191V8c0-1.435-.002-2.437-.103-3.192c-.099-.734-.28-1.122-.556-1.399c-.277-.277-.665-.457-1.4-.556c-.755-.101-1.756-.103-3.191-.103H8c-1.435 0-2.437.002-3.192.103c-.734.099-1.122.28-1.399.556c-.277.277-.457.665-.556 1.4C2.752 5.562 2.75 6.564 2.75 8v4c0 1.435.002 2.437.103 3.192c.099.734.28 1.122.556 1.399c.243.243.572.41 1.138.515c.57.104 1.316.134 2.357.142M8.25 6A.75.75 0 0 1 9 5.25h6a.75.75 0 0 1 0 1.5H9A.75.75 0 0 1 8.25 6m-2 3.5A.75.75 0 0 1 7 8.75h10a.75.75 0 0 1 0 1.5H7a.75.75 0 0 1-.75-.75m6.373 5.016a.96.96 0 0 0-1.246 0a2.46 2.46 0 0 1-1.4.58a.96.96 0 0 0-.88.881a2.46 2.46 0 0 1-.58 1.4a.96.96 0 0 0 0 1.246c.335.394.538.884.58 1.4a.96.96 0 0 0 .88.88a2.46 2.46 0 0 1 1.4.58a.96.96 0 0 0 1.246 0a2.46 2.46 0 0 1 1.4-.58a.96.96 0 0 0 .88-.88a2.46 2.46 0 0 1 .58-1.4a.96.96 0 0 0 0-1.246a2.46 2.46 0 0 1-.58-1.4a.96.96 0 0 0-.88-.88a2.46 2.46 0 0 1-1.4-.58m.365 1.936a.75.75 0 1 1 1.024 1.096l-2.143 2a.75.75 0 0 1-1.024 0l-.857-.8a.75.75 0 0 1 1.024-1.096l.345.322z"
                         clip-rule="evenodd" />
                 </svg>
                 <span>Cursos</span></a>
         </li>
     </ul>
 </div>