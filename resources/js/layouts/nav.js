function updateActiveNavLink() {
    const currentPath = window.location.pathname;

    document.querySelectorAll('.navigation .menu a').forEach((link) => {
        link.classList.toggle('active', link.pathname === currentPath);
    });
}

document.addEventListener('DOMContentLoaded', updateActiveNavLink);
document.addEventListener('livewire:navigated', updateActiveNavLink);
