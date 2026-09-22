<?php

/*
|--------------------------------------------------------------------------
| Colores de los badges de tecnología
|--------------------------------------------------------------------------
| La clave es el valor 'color' de cada tecnología en config/data-projects.php.
| La búsqueda NO distingue mayúsculas ('React' y 'react' son lo mismo).
| Si una clave no existe aquí, el badge usa 'default' (gris) — así que si ves
| un badge gris, es que falta agregarlo en esta lista.
|
| Formato: fondo claro + texto oscuro del mismo tono + anillo tenue.
| Tonos suaves a propósito: los badges acompañan la paleta, no compiten.
*/

return [
    'default' => 'bg-sand-100 text-sand-700 ring-sand-500/20',

    // ---- Frontend ----
    'react' => 'bg-cyan-50 text-cyan-700 ring-cyan-600/15',
    'react-router' => 'bg-rose-50 text-rose-700 ring-rose-600/15',
    'framer' => 'bg-fuchsia-50 text-fuchsia-700 ring-fuchsia-600/15',
    'vue' => 'bg-emerald-50 text-emerald-700 ring-emerald-600/15',
    'next' => 'bg-zinc-100 text-zinc-800 ring-zinc-600/15',
    'alpine' => 'bg-sky-50 text-sky-700 ring-sky-600/15',
    'js' => 'bg-amber-50 text-amber-800 ring-amber-600/20',
    'typescript' => 'bg-blue-50 text-blue-700 ring-blue-600/15',
    'jquery' => 'bg-blue-50 text-blue-700 ring-blue-600/15',
    'html' => 'bg-orange-50 text-orange-700 ring-orange-600/15',
    'css' => 'bg-sky-50 text-sky-700 ring-sky-600/15',
    'sass' => 'bg-pink-50 text-pink-700 ring-pink-600/15',
    'tailwind' => 'bg-aqua-100 text-aqua-600 ring-aqua-500/20',
    'bootstrap' => 'bg-violet-50 text-violet-700 ring-violet-600/15',

    // ---- Backend ----
    'laravel' => 'bg-red-50 text-red-700 ring-red-600/15',
    'php' => 'bg-indigo-50 text-indigo-700 ring-indigo-600/15',
    'livewire' => 'bg-pink-50 text-pink-700 ring-pink-600/15',
    'blade' => 'bg-red-50 text-red-700 ring-red-600/15',
    'node' => 'bg-green-50 text-green-700 ring-green-600/15',
    'axios' => 'bg-indigo-50 text-indigo-700 ring-indigo-600/15',

    // ---- Datos ----
    'mysql' => 'bg-teal-50 text-teal-700 ring-teal-600/15',
    'postgres' => 'bg-blue-50 text-blue-700 ring-blue-600/15',
    'mongodb' => 'bg-green-50 text-green-700 ring-green-600/15',
    'firebase' => 'bg-amber-50 text-amber-800 ring-amber-600/20',

    // ---- Herramientas ----
    'vite' => 'bg-violet-50 text-violet-700 ring-violet-600/15',
    'git' => 'bg-orange-50 text-orange-700 ring-orange-600/15',
    'github' => 'bg-zinc-100 text-zinc-800 ring-zinc-600/15',
    'docker' => 'bg-sky-50 text-sky-700 ring-sky-600/15',
    'figma' => 'bg-purple-50 text-purple-700 ring-purple-600/15',
];
