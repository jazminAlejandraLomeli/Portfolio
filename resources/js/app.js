import * as bootstrap from "bootstrap";

import $ from "jquery";
window.$ = $;
window.jQuery = $;

import AOS from "aos";
import "aos/dist/aos.css";

document.addEventListener("DOMContentLoaded", () => {
    AOS.init({
        duration: 1000, // duración de la animación
        easing: "ease-in-out",
        once: true, // solo una vez
        mirror: false, // no repetir al hacer scroll hacia atrás
    });
});
