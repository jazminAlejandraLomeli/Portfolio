document.querySelectorAll(".read-more-btn").forEach((btn) => {
    const targetId = btn.getAttribute("data-target");
    const desc = document.getElementById(targetId);

    // ⭐ Detectar si el texto es más largo que el límite (3 líneas)
    const lineHeight = parseInt(window.getComputedStyle(desc).lineHeight);
    const maxHeight = lineHeight * 3;

    if (desc.scrollHeight <= maxHeight + 2) {
        // Texto corto → ocultar botón
        btn.style.display = "none";
    }

    // Evento de leer más / leer menos
    btn.addEventListener("click", () => {
        desc.classList.toggle("expanded");

        btn.innerText = desc.classList.contains("expanded")
            ? "Leer menos"
            : "Leer más";
    });
});
