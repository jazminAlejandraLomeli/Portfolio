@extends('layouts.app')
<title>Skills</title>
@vite(['resources/css/carrousel.css', 'resources/css/skills.css'])


  


@section('content')
    <!-- Contenido de la vista -->
    <div class="card_style main-cont position-relative">

        <div>

            <x-title title="Lenguajes de programación y Frameworks" />


            <div class="row g-md-3 p-3">
 <!-- Habilidades del frontend -->
                <x-container-fronted-skills />
                <!-- Habilidaees del backend -->
                <x-container-backend-skills />
                <!-- Habilidades de bases de datos -->
                <x-container-develop-tools />
  

                <!-- <div class="row">


                    <div class=" pt-3">
                        <x-title title="Habiliadaes blandas" />

                    </div>
                    <div>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos ipsum praesentium dolores, harum optio
                        quidem
                        voluptas, perferendis quis aliquam est, sapiente sint obcaecati earum quasi. Rem sunt eveniet et
                        itaque!
                    </div>


                </div> -->

               
            </div>
        @endsection
