import * as bootstrap from "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

import AOS from "aos";
import "aos/dist/aos.css";

document.addEventListener("DOMContentLoaded", () => {
    AOS.init({
        duration: 500,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });

    // Tooltips
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
        new bootstrap.Tooltip(el);
    });

    // Carruseles (opcional pero recomendado)
    document.querySelectorAll('.carousel').forEach(carousel => {
        new bootstrap.Carousel(carousel);
    });
});
