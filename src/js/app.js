document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
  darkMode();
});

function darkMode() {
  const prefiereDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  function toggleDarkMode() {
    if (prefiereDarkMode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  }

  toggleDarkMode(); // Llamar a toggleDarkMode() una vez al inicio para establecer el modo correcto.

  prefiereDarkMode.addEventListener("change", toggleDarkMode);

  const botonDarkMode = document.querySelector(".dark-mode-boton");
  if (botonDarkMode) {
    botonDarkMode.addEventListener("click", function () {
      document.body.classList.toggle("dark-mode");
    });
  }
}

function eventListeners() {
  const mobileMenu = document.querySelector(".mobile-menu");
  if (mobileMenu) {
    mobileMenu.addEventListener("click", navegacionResponsive);
  }
}

function navegacionResponsive() {
  const navegacion = document.querySelector(".navegacion");
  if (navegacion) {
    navegacion.classList.toggle("mostrar");
  }
}
