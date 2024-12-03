// Esperamos a que el DOM esté listo
$(document).ready(function () {
    // Detectamos el clic en cualquier lugar fuera de la barra de navegación
    $(document).click(function (event) {
        // Si el clic ocurre fuera de la navbar, la cerramos
        if (!$(event.target).closest('.navbar').length) {
            $('#navbarNavAltMarkup').collapse('hide');
        }
    });

    // Detectamos clics en los enlaces dentro de la navbar
    $('.navbar-nav .nav-link').click(function () {
        // Si se hace clic en un enlace, cerramos la navbar
        $('#navbarNavAltMarkup').collapse('hide');
    });
});
