<?php

/*
|--------------------------------------------------------------------------
| Datos de contacto y estado del portafolio
|--------------------------------------------------------------------------
| Centralizados aquí para que el Hero, el CTA final y los modales usen
| siempre la misma fuente de verdad.
*/

return [
    'name' => 'Jazmin A. Lomeli',
    'role' => 'Full-Stack Web Developer',

    // 🟢 Cambia a false cuando no estés tomando proyectos.
    'available' => true,
    'available_label' => 'Disponible para nuevos proyectos',

    'email' => 'alejandrazermeno18@gmail.com',

    // TODO: pon tu número real en formato internacional sin signos: 52XXXXXXXXXX
    'whatsapp' => env('PORTFOLIO_WHATSAPP', ''),

    'linkedin' => 'https://www.linkedin.com/in/jazmin-lomel%C3%AD-zerme%C3%B1o/',
    'github' => 'https://github.com/jazminAlejandraLomeli',

    // Mensaje precargado para WhatsApp / correo
    'contact_message' => '¡Hola Jazmín! Vi tu portafolio y me gustaría hablar de un proyecto.',
];
