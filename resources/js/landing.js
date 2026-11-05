// Alpine para la landing, sin Livewire.
// Antes se cargaba el bundle completo de Livewire (~91 KB) solo para usar
// Alpine; aquí van únicamente Alpine y los dos plugins que usa la página:
//   - intersect: animaciones al hacer scroll (x-intersect)
//   - focus: atrapar el foco dentro del modal (x-trap)
import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";
import focus from "@alpinejs/focus";

Alpine.plugin(intersect);
Alpine.plugin(focus);

window.Alpine = Alpine;
Alpine.start();
