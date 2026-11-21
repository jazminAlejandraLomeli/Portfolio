<?php
// Datos de los proyectos que he desarrollado
//
// Campos nuevos usados por la landing:
//   featured      => true en UN solo proyecto: se renderiza como case study grande
//   tagline       => frase corta para la tarjeta (1 línea)
//   year, category
//   cover         => imagen de portada de la tarjeta (si falta, usa images[0])
//   cover_position=> left | center | right: qué parte de la portada se conserva al recortarla
//                    (left si el título del banner está a la izquierda; center si está centrado)
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

        // MENTES BRILLANTES — Escuela de regularización (demo en línea)
        [
            'id' => '0',
            'keyword' => 'mentes-brillantes',
            'featured' => true, // Destacado en la página principal
            'title' => 'Mentes Brillantes',
            'tagline' => 'Página web, agenda de clases y recordatorios por WhatsApp para una escuela de regularización.',
            'year' => '2026',
            'category' => 'Web App · Panel administrativo',
            'description' => 'Plataforma para una escuela de clases de regularización y cursos para niños. Tiene una página pública con banners, catálogo de clases con precios, eventos, galería, perfil de la maestra y sucursales con mapa, y un panel donde la dueña administra todo ese contenido, lleva su agenda de clases y alumnos, y manda recordatorios, cancelaciones o cambios de horario por WhatsApp con un clic. Ella misma puede cambiar los colores pastel, las tipografías y el logo de su página.',
            'problem' => 'La maestra llevaba sus clases en libreta y avisaba a cada papá por WhatsApp escribiendo los mensajes a mano. Además dependía de otra persona para cambiar cualquier cosa de su página: precios, avisos, fotos o direcciones.',
            'architecture' => 'Monolito en Laravel 12 con Inertia.js y React + TypeScript: el backend resuelve rutas, validación (Form Requests), lógica de negocio (Services y Actions) y API Resources, y React renderiza la interfaz sin una API separada. Tailwind CSS con un tema de colores que se cambia en vivo desde el panel, MySQL, imágenes optimizadas a WebP con GD y enlaces click-to-chat de WhatsApp con plantillas editables. Pensado como marca blanca: cada cliente cambia solo su archivo de configuración y su logo. Desplegado en Hostinger con deploy automático desde GitHub Actions.',
            'gitHub' => '',
            'linkDemo' => 'https://demo.jazmin-lomeli.com',
            'role' => 'Diseño UI/UX + Desarrollo Full-Stack ✨',
            'cover' => 'img/mentes-brillantes/banner.webp',
            'cover_position' => 'left', // dónde se ancla la portada al recortarla: left · center · right
            'images' => [
                'img/mentes-brillantes/banner.webp',
                'img/mentes-brillantes/landing.webp',
                'img/mentes-brillantes/agenda.webp',
                'img/mentes-brillantes/apariencia.webp',
                'img/mentes-brillantes/panel.webp',
            ],
            'technologies' => [
                ['name' => 'Laravel (PHP)', 'color' => 'laravel'],
                ['name' => 'Inertia.js', 'color' => 'inertia'],
                ['name' => 'React', 'color' => 'react'],
                ['name' => 'TypeScript', 'color' => 'typescript'],
                ['name' => 'Tailwind CSS', 'color' => 'tailwind'],
                ['name' => 'MySQL', 'color' => 'mysql'],
            ],
            'features' => [
                'short' => [
                    ['name' => 'Agenda con clases recurrentes y estados de cada clase'],
                    ['name' => 'Recordatorios y avisos por WhatsApp con un clic'],
                    ['name' => 'Panel para editar toda la página sin programar'],
                ],
                'full' => [
                    'Página pública: banners, clases y cursos con precio, eventos, galería, perfil de la maestra y sucursales con mapa',
                    'Panel para administrar banners, servicios, eventos, galería, maestros y sucursales',
                    'Agenda por semana, mes y lista, con clases recurrentes y estados (pendiente, confirmada, completada, cancelada)',
                    'Alumnos y tutores con búsqueda y teléfono validado a 10 dígitos',
                    'Recordatorio, cancelación y reagendado por WhatsApp con plantillas editables',
                    'Colores pastel, tipografías y logo que la dueña cambia en vivo, con vista previa',
                    'Modo multi-maestro opcional y marca blanca para nuevos clientes',
                    'Modo demo que se reinicia cada noche, con 84 pruebas automatizadas y deploy automático',
                ],
            ],
        ],
        
        [
            'id' => '4',
            'keyword' => 'detalles-eternos',
            'featured' => false, // Destacado en la página principal
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
            'cover_position' => 'center', // dónde se ancla la portada al recortarla: left · center · right
            'images' => [
                'img/detalles-eternos/banner.webp',
                'img/detalles-eternos/templates.webp',
                'img/detalles-eternos/template-3.webp',
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
            'title' => 'RH-Human System',
            'tagline' => 'Centraliza empleados, contratos y nombramientos de todo un departamento.',
            'year' => '2026',
            'category' => 'Sistema interno',
            'description' => 'Sistema desarrollado para el departamento de RH que centraliza el expediente de cada empleado (datos personales, nombramientos, asistencia, domicilio, contacto de emergencia e historial), la gestión de contratos y estados laborales. Incluye un panel con indicadores en tiempo real, alertas de contratos por vencer y vencidos, recordatorios de cumpleaños y aniversarios laborales, y exportación a Excel; además unifica esta información para su consulta desde otros sistemas de la misma red.',
            'problem' => 'La información de empleados vivía repartida entre hojas de cálculo y sistemas que no se hablaban entre sí, así que cada consulta implicaba cruzar datos a mano.',
            'architecture' => 'Frontend desacoplado: una SPA en React con React Router, estilizada con Tailwind CSS y componentes accesibles, que consume vía Axios una API REST versionada en Laravel con autenticación por sesión y protección CSRF (Sanctum). MySQL normalizado funciona como fuente única de verdad, consultable por otros sistemas de la red, y los reportes se generan y exportan a Excel desde el propio sistema.',
            // 'gitHub' => 'https://github.com/jazminAlejandraLomeli/Sistema_RH',
            'linkDemo' => '',
            'role' => 'Full-Stack Developer 🧩',
            // Capturas reales con datos ficticios (nombres, códigos, correos y fotos reemplazados)
            'cover' => 'img/rh-sistem/banner.webp',
            'cover_position' => 'left', // dónde se ancla la portada al recortarla: left · center · right
            'images' => [
                'img/rh-sistem/banner.webp',
                'img/rh-sistem/personal.webp',
                'img/rh-sistem/expediente.webp',
                'img/rh-sistem/vencimientos.webp',
            ],
            'technologies' => [
                ['name' => 'React', 'color' => 'react'],
                ['name' => 'React Router', 'color' => 'react-router'],
                ['name' => 'Tailwind CSS', 'color' => 'tailwind'],
                ['name' => 'Laravel (API REST)', 'color' => 'laravel'],
                ['name' => 'Axios', 'color' => 'axios'],
                ['name' => 'MySQL', 'color' => 'mysql'],
            ],
            'features' => [
                'short' => [
                    ['name' => 'Panel con indicadores y alertas de contratos por vencer'],
                    ['name' => 'Expediente digital completo de cada empleado'],
                    ['name' => 'SPA en React consumiendo una API REST en Laravel'],
                ],
                'full' => [
                    'SPA en React con React Router y Tailwind CSS',
                    'API REST versionada en Laravel con autenticación por sesión y CSRF',
                    'Panel con indicadores filtrables por estatus, nombramiento, contrato y sexo',
                    'Expediente por empleado: nombramientos, asistencia, domicilio, contacto de emergencia e historial',
                    'Control de vencimientos de contratos y documentos (por vencer / vencidos)',
                    'Recordatorios de cumpleaños y aniversarios laborales',
                    'Exportación de reportes a Excel',
                    'Diseño y normalización de base de datos MySQL',
                    'Diseño UX/UI orientado a usuarios administrativos, con modo oscuro',
                ],
            ],
        ],

        // Agenda de Aulas y eventos
        [
            'id' => '2',
            'keyword' => 'agenda-reservaciones',
            'featured' => false,
            'title' => 'Agenda de reservaciones',
            'tagline' => 'Agenda modular para reservar aulas, laboratorios o cualquier espacio, con inventario integrado.',
            'year' => '2026',
            'category' => 'Sistema interno · Plataforma modular',
            'description' => 'Plataforma de reservaciones pensada para cualquier tipo de espacio (aulas, laboratorios, salas o áreas de servicio). Las reservaciones se hacen con anticipación desde un calendario, y cada solicitud indica los reactivos, materiales y equipos que necesita; el inventario se descuenta o se suma automáticamente y genera una lista de compras. Puede llevar listas de asistencia y se organiza por grupos, cada uno con sus propios espacios, usuarios y módulos (plugins) activados según lo que necesita.',
            'problem' => 'Las reservaciones se hacían por correo y teléfono, lo que provocaba dobles agendas, inventarios que no cuadraban y áreas colaboradoras que se enteraban tarde de los insumos que debían preparar. Además, cada área trabajaba distinto, así que una solución rígida no servía para todas.',
            'architecture' => 'Monolito moderno en Laravel con Inertia.js y React: el backend resuelve rutas, permisos y lógica de negocio, y React renderiza la interfaz como SPA sin una API separada. Tailwind CSS para el diseño y MySQL con un modelo relacional que impide empalmes de horario y lleva el control de existencias por grupo. Arquitectura por módulos (plugins) que se activan por grupo, con roles de usuario y flujo de aprobación de solicitudes.',
            // 'gitHub' => 'https://githkub.com/jazminAlejandraLomeli/Agenda',
            'linkDemo' => '',
            'role' => 'Full-Stack Developer 🧩',
            // Capturas reales con datos ficticios (nombres, correos, logo y nombre del sistema reemplazados)
            'cover' => 'img/agenda-reservaciones/banner.webp',
            'cover_position' => 'left', // dónde se ancla la portada al recortarla: left · center · right
            'images' => [
                'img/agenda-reservaciones/banner.webp',
                'img/agenda-reservaciones/inventario.webp',
                'img/agenda-reservaciones/reservacion.webp',
                'img/agenda-reservaciones/grupos.webp',
            ],
            'technologies' => [
                ['name' => 'Laravel (PHP)', 'color' => 'laravel'],
                ['name' => 'Inertia.js', 'color' => 'inertia'],
                ['name' => 'React', 'color' => 'react'],
                ['name' => 'Tailwind CSS', 'color' => 'tailwind'],
                ['name' => 'MySQL', 'color' => 'mysql'],
            ],
            'features' => [
                'short' => [
                    ['name' => 'Calendario de reservaciones sin empalmes de horario'],
                    ['name' => 'Inventario que se descuenta o suma con cada reservación'],
                    ['name' => 'Módulos (plugins) adaptables para cada grupo'],
                ],
                'full' => [
                    'Calendario con vistas de mes, semana, día y agenda, filtrable por espacio',
                    'Reservaciones con anticipación y flujo de aprobación (pendiente, aprobada, rechazada)',
                    'Solicitud de reactivos, materiales y equipos por reservación, con comparación contra inventario',
                    'Control de existencias con mínimos, categorías y lista de compras automática',
                    'Listas de asistencia desde la propia reservación',
                    'Grupos independientes con sus espacios, usuarios, encargados y plugins activados',
                    'Catálogos configurables: lugares, tipos de reservación, dependencias e incidencias',
                    'Roles y permisos (super admin, encargados y solicitantes), historial y estadísticas',
                    'Agenda pública opcional y comunicación interna por solicitud',
                ],
            ],
        ],

        // Consultorio Historias clínicas digitales
        // [
        //     'id' => '3',
        //     'keyword' => 'clinick-track',
        //     'featured' => false,
        //     'title' => 'Historias clínicas digitales',
        //     'tagline' => 'Expediente médico digital para clínicas y consultorios.',
        //     'year' => '2023',
        //     'category' => 'Sistema de gestión',
        //     'description' => 'Sistema para la gestión de historias clínicas digitales en clínicas y consultorios médicos, permitiendo el registro, seguimiento y consulta de la información médica de los pacientes de manera segura y eficiente.',
        //     'problem' => 'El expediente en papel hacía lento el seguimiento de cada paciente y volvía frágil el resguardo de información médica sensible.',
        //     'architecture' => 'Laravel MVC, Blade + Bootstrap y CSS propio en el frontend, jQuery para la interacción, y MySQL normalizado con control de acceso por rol para proteger la información clínica.',
        //     'gitHub' => 'https://github.com/jazminAlejandraLomeli/RH-Historias-Clinicas',
        //     'linkDemo' => '',
        //     'role' => 'Full-Stack Developer 🧩',
        //     'images' => [
        //         'https://img.freepik.com/vector-premium/diseno-plantilla-interfaz-usuario-pagina-destino-sitio-web-negocios-corporativos_509521-17.jpg',
        //         'https://www.ensalza.com/blog/wp-content/uploads/GUI.png',
        //         'https://www.creativefabrica.com/wp-content/uploads/2020/08/06/Flat-design-login-illustration-web-page-Graphics-4868947-1.jpg',
        //     ],
        //     'technologies' => [
        //         ['name' => 'Laravel (PHP)', 'color' => 'laravel'],
        //         ['name' => 'jQuery', 'color' => 'Jquery'],
        //         ['name' => 'Css', 'color' => 'css'],
        //         ['name' => 'Bootstrap', 'color' => 'Bootstrap'],
        //         ['name' => 'Mysql', 'color' => 'mysql'],
        //     ],
        //     'features' => [
        //         'short' => [
        //             ['name' => 'Diseño y modelado de bases de datos relacionales'],
        //             ['name' => 'Desarrollo backend con Laravel y frontend con Blade y Bootstrap'],
        //             ['name' => 'Interfaces responsivas enfocadas en experiencia de usuario'],
        //         ],
        //         'full' => [
        //             'Desarrollo backend con Laravel siguiendo arquitectura MVC',
        //             'Implementación de frontend con Blade y Bootstrap',
        //             'Diseño y normalización de base de datos MySQL',
        //             'Interfaces responsivas enfocadas en experiencia de usuario',
        //             'Diseño UX/UI orientado a usuarios administrativos',
        //             'Mantenimiento, mejoras y corrección de bugs',
        //         ],
        //     ],
        // ],
    ],
];
