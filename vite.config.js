import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/aside.css",
                "resources/css/notavailable.css",
                "resources/css/carrousel.css",
                "resources/css/skills.css",
                "resources/js/experience/index.js",
                // "resources/js/layouts/aside.js",
                "resources/js/layouts/nav.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
