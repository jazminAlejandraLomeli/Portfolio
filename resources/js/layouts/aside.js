function handleAnimateOnce() {
    const elements = document.querySelectorAll('.animate-once');

    elements.forEach((el, index) => {
        const key = 'animated_' + index;

        if (sessionStorage.getItem(key)) {
            // Ya animó → quitar animación
            el.classList.remove(
                'animate__animated',
                ...Array.from(el.classList).filter(c => c.startsWith('animate__'))
            );
        } else {
            // Primera vez
            sessionStorage.setItem(key, 'true');
        }
    });
}

// Primera carga
document.addEventListener('DOMContentLoaded', handleAnimateOnce);

// Navegación Livewire
document.addEventListener('livewire:navigated', handleAnimateOnce);
