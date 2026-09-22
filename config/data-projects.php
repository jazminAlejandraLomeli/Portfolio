<?php
// Datos de los proyectos que he desarrollado
//
// Campos nuevos usados por la landing:
//   featured      => true en UN solo proyecto: se renderiza como case study grande
//   tagline       => frase corta para la tarjeta (1 línea)
//   year, category
//   cover         => imagen de portada de la tarjeta (si falta, usa images[0])
//   problem       => el problema que resolvió
//   architecture  => cómo está construido
return [
    'projects' => [

        // ─────────────────────────────────────────────────────────────
        // DETALLES ETERNOS — Proyecto estrella
        // TODO Jazmín: ajusta descripción, problema y arquitectura con los
        // datos reales, y reemplaza las imágenes por capturas propias en
        // public/img/projects/detalles-eternos/*.webp
        // ─────────────────────────────────────────────────────────────
        [
            'id' => '0',
            'keyword' => 'detalles-eternos',
            'featured' => true,
            'title' => 'Detalles Eternos',
            'tagline' => 'Landing page e-commerce interactiva con generador de QR y páginas de regalo.',
            'year' => '2026',
            'category' => 'Landing page · E-commerce · Web App',
            'description' => 'Experiencia web inmersiva para una marca de regalos personalizados. Incluye un catálogo dinámico con modales independientes, un generador de QR personalizado (QR Studio) y la arquitectura para renderizar páginas de regalo interactivas mediante plantillas personalizables.',
            'problem' => 'La marca perdía ventas potenciales y tiempo resolviendo dudas repetitivas sobre el catálogo, precios y tiempos de elaboración por mensajes privados. Requerían un catálogo interactivo con atención fluida por WhatsApp y una herramienta innovadora para crear experiencias de regalo digitales con QR.',
            'architecture' => 'Construido en React con React Router para Single Page Application (SPA), estilizado con Tailwind CSS y animado con Framer Motion a 60 FPS. Manejo de contenido desacoplado vía archivos JSON, carga diferida (lazy loading) para optimización de bundle, e integración dinámica con la API de WhatsApp.',
            'gitHub' => '',
            // 'gitHub' => 'https://github.com/jazminAlejandraLomeli/Detalles-Eternos',
            'linkDemo' => 'https://detalles-eternos.com',
            'role' => 'Diseño UI/UX + Desarrollo Frontend Full-Stack ✨',
            'cover' => 'img/detalles-eternos/banner.webp',
            'images' => [
                'img/detalles-eternos/banner.webp',
                'img/detalles-eternos/templates.webp',
            ],
            'technologies' => [
                ['name' => 'React', 'color' => 'react'],
                ['name' => 'Tailwind CSS', 'color' => 'tailwind'],
                ['name' => 'Framer Motion', 'color' => 'framer'],
                ['name' => 'React Router', 'color' => 'react-router'],
                ['name' => 'JavaScript (ES6+)', 'color' => 'js'],
            ],
            'features' => [
                'short' => [
                    ['name' => 'Catálogo dinámico con ficha modal y scroll independiente'],
                    ['name' => 'QR Studio para generar códigos QR personalizados'],
                    ['name' => 'Páginas de regalo interactivas con sistema de plantillas'],
                    ['name' => 'Enlace automático a WhatsApp con plantilla codificada'],
                ],
                'full' => [
                    'Diseño UI/UX completo con paleta cálida y tipografía display',
                    'Catálogo responsivo con modales tipo bottom-sheet optimizados para móvil',
                    'Generador de códigos QR personalizados (QR Studio) para regalos',
                    'Plataforma de páginas de regalo personalizadas accesibles vía URL/QR',
                    'Animaciones fluidas a 60 FPS con Framer Motion',
                    'Formateador inteligente de enlaces a WhatsApp con emojis y saltos de línea',
                    'Gestión de catálogo y páginas mediante archivos JSON desacoplados',
                    'Carga asíncrona por rutas (Code Splitting & Lazy Loading)',
                ],
            ],
        ],

        // RH-SISTEM
        [
            'id' => '1',
            'keyword' => 'rh-sistem',
            'featured' => false,
            'title' => 'Rh-Human System',
            'tagline' => 'Centraliza empleados, contratos y nombramientos de todo un departamento.',
            'year' => '2024',
            'category' => 'Sistema interno',
            'description' => 'Sistema desarrollado para el departamento de RH, donde se centralizan los datos de los empleados, la gestión de contratos, nombramientos y estados laborales, además de unificar esta información para la consulta en diversos sistemas de la misma red.',
            'problem' => 'La información de empleados vivía repartida entre hojas de cálculo y sistemas que no se hablaban entre sí, así que cada consulta implicaba cruzar datos a mano.',
            'architecture' => 'Laravel bajo arquitectura MVC, Blade + Bootstrap en el frontend, jQuery y Axios para las peticiones asíncronas, y MySQL normalizado como fuente única de verdad consultable por otros sistemas de la red.',
            'gitHub' => 'https://github.com/jazminAlejandraLomeli/Sistema_RH',
            'linkDemo' => '',
            'role' => 'Full-Stack Developer 🧩',
            'images' => [
                'https://img.freepik.com/vector-premium/diseno-plantilla-interfaz-usuario-pagina-destino-sitio-web-negocios-corporativos_509521-17.jpg',
                'https://www.ensalza.com/blog/wp-content/uploads/GUI.png',
                'https://www.creativefabrica.com/wp-content/uploads/2020/08/06/Flat-design-login-illustration-web-page-Graphics-4868947-1.jpg',
            ],
            'technologies' => [
                ['name' => 'Laravel (PHP)', 'color' => 'laravel'],
                ['name' => 'Bootstrap', 'color' => 'Bootstrap'],
                ['name' => 'jQuery', 'color' => 'Jquery'],
                ['name' => 'Axios', 'color' => 'axios'],
                ['name' => 'Mysql', 'color' => 'mysql'],
            ],
            'features' => [
                'short' => [
                    ['name' => 'Interfaces responsivas enfocadas en experiencia de usuario'],
                    ['name' => 'Desarrollo backend con Laravel bajo arquitectura MVC'],
                    ['name' => 'Implementación de interfaces frontend con Blade y Bootstrap'],
                ],
                'full' => [
                    'Desarrollo backend con Laravel siguiendo arquitectura MVC',
                    'Implementación de frontend con Blade y Bootstrap',
                    'Diseño y normalización de base de datos MySQL',
                    'Interfaces responsivas enfocadas en experiencia de usuario',
                    'Diseño UX/UI orientado a usuarios administrativos',
                    'Mantenimiento, mejoras y corrección de bugs',
                ],
            ],
        ],

        // Agenda de Aulas y eventos
        [
            'id' => '2',
            'keyword' => 'agenda-reservaciones',
            'featured' => false,
            'title' => 'Agenda de reservaciones',
            'tagline' => 'Reserva de aulas, laboratorios y áreas de un centro universitario.',
            'year' => '2024',
            'category' => 'Sistema interno',
            'description' => 'Sistema para la reservación de diferentes áreas del centro universitario, donde se especifican las notas sobre los insumos necesarios para las áreas colaboradoras, además de gestionar la reservación de aulas de cómputo y laboratorios.',
            'problem' => 'Las reservaciones se hacían por correo y teléfono, lo que provocaba dobles agendas y áreas colaboradoras que se enteraban tarde de los insumos que debían preparar.',
            'architecture' => 'Laravel MVC en el backend, Blade + Tailwind CSS en la interfaz, JavaScript y jQuery para la lógica del calendario, y MySQL con un modelo relacional que impide empalmes de horario.',
            'gitHub' => 'https://github.com/jazminAlejandraLomeli/Agenda',
            'linkDemo' => '',
            'role' => 'Full-Stack Developer 🧩',
            'images' => [
                'https://pixpine.com/wp-content/uploads/2025/06/food-delivery-paper-bag-mockup-pixpine.jpg',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8YEQk4_5qmV6vV2faeiqrVA14wwc7oPq2Qg&s',
                'https://www.creativefabrica.com/wp-content/uploads/2020/08/06/Flat-design-login-illustration-web-page-Graphics-4868947-1.jpg',
            ],
            'technologies' => [
                ['name' => 'Javascript', 'color' => 'js'],
                ['name' => 'jQuery', 'color' => 'Jquery'],
                ['name' => 'Laravel (PHP)', 'color' => 'laravel'],
                ['name' => 'Tailwind CSS', 'color' => 'Tailwind'],
                ['name' => 'Mysql', 'color' => 'mysql'],
            ],
            'features' => [
                'short' => [
                    ['name' => 'Diseño y modelado de bases de datos relacionales'],
                    ['name' => 'Desarrollo backend con Laravel bajo arquitectura MVC'],
                    ['name' => 'Implementación de interfaces frontend con Blade y Tailwind CSS'],
                ],
                'full' => [
                    'Desarrollo backend con Laravel siguiendo arquitectura MVC',
                    'Implementación de frontend con Blade y Bootstrap',
                    'Diseño y normalización de base de datos MySQL',
                    'Interfaces responsivas enfocadas en experiencia de usuario',
                    'Diseño UX/UI orientado a usuarios administrativos',
                    'Mantenimiento, mejoras y corrección de bugs',
                ],
            ],
        ],

        // Consultorio Historias clínicas digitales
        [
            'id' => '3',
            'keyword' => 'clinick-track',
            'featured' => false,
            'title' => 'Historias clínicas digitales',
            'tagline' => 'Expediente médico digital para clínicas y consultorios.',
            'year' => '2023',
            'category' => 'Sistema de gestión',
            'description' => 'Sistema para la gestión de historias clínicas digitales en clínicas y consultorios médicos, permitiendo el registro, seguimiento y consulta de la información médica de los pacientes de manera segura y eficiente.',
            'problem' => 'El expediente en papel hacía lento el seguimiento de cada paciente y volvía frágil el resguardo de información médica sensible.',
            'architecture' => 'Laravel MVC, Blade + Bootstrap y CSS propio en el frontend, jQuery para la interacción, y MySQL normalizado con control de acceso por rol para proteger la información clínica.',
            'gitHub' => 'https://github.com/jazminAlejandraLomeli/RH-Historias-Clinicas',
            'linkDemo' => '',
            'role' => 'Full-Stack Developer 🧩',
            'images' => [
                'https://img.freepik.com/vector-premium/diseno-plantilla-interfaz-usuario-pagina-destino-sitio-web-negocios-corporativos_509521-17.jpg',
                'https://www.ensalza.com/blog/wp-content/uploads/GUI.png',
                'https://www.creativefabrica.com/wp-content/uploads/2020/08/06/Flat-design-login-illustration-web-page-Graphics-4868947-1.jpg',
            ],
            'technologies' => [
                ['name' => 'Laravel (PHP)', 'color' => 'laravel'],
                ['name' => 'jQuery', 'color' => 'Jquery'],
                ['name' => 'Css', 'color' => 'css'],
                ['name' => 'Bootstrap', 'color' => 'Bootstrap'],
                ['name' => 'Mysql', 'color' => 'mysql'],
            ],
            'features' => [
                'short' => [
                    ['name' => 'Diseño y modelado de bases de datos relacionales'],
                    ['name' => 'Desarrollo backend con Laravel y frontend con Blade y Bootstrap'],
                    ['name' => 'Interfaces responsivas enfocadas en experiencia de usuario'],
                ],
                'full' => [
                    'Desarrollo backend con Laravel siguiendo arquitectura MVC',
                    'Implementación de frontend con Blade y Bootstrap',
                    'Diseño y normalización de base de datos MySQL',
                    'Interfaces responsivas enfocadas en experiencia de usuario',
                    'Diseño UX/UI orientado a usuarios administrativos',
                    'Mantenimiento, mejoras y corrección de bugs',
                ],
            ],
        ],
    ],
];
