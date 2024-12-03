<?php
if (!defined('BASE_URL')) {
    die('Acceso no autorizado.');
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/php-cac-2022-integrador/data/config.php';
?>
<footer class="py-3 bg-dark-blue mt-3 py-4">
    <ul class="nav justify-content-center justify-content-xl-between align-items-center mt-2 p-2 px-xl-5 text-white">
        <li class="nav-item my-3 my-sm-0 me-sm-2">
            <a href="<?php echo BASE_URL; ?>/faq.php" class="nav-link text-light text-center link-break"
                aria-label="Ir a Preguntas Frecuentes / FAQs">Preguntas Frecuentes</a>
        </li>
        <li class="nav-item my-3 my-sm-0 mx-sm-2">
            <a href="<?php echo BASE_URL; ?>/contact.php" class="nav-link text-light"
                aria-label="Contactarse con el personal de Conferencia Buenos Aires">Contáctanos</a>
        </li>
        <li class="nav-item my-3 my-sm-0 mx-sm-2">
            <a href="<?php echo BASE_URL; ?>/press.php" class="nav-link text-light"
                aria-label="Ir a la sección de prensa">Prensa</a>
        </li>
        <li class="nav-item my-3 my-sm-0 mx-sm-2">
            <a href="<?php echo BASE_URL; ?>/conferences.php" class="nav-link text-light"
                aria-label="Ir a la sección de conferencias">Conferencias</a>
        </li>
        <li class="nav-item my-3 my-sm-0 mx-sm-2">
            <a href="<?php echo BASE_URL; ?>/terms.php" class="nav-link text-light text-center link-break"
                aria-label="Ir a la sección de términos y condiciones">Términos y Condiciones</a>
        </li>
        <li class="nav-item my-3 my-sm-0 mx-sm-2">
            <a href="<?php echo BASE_URL; ?>/privacy.php" class="nav-link text-light"
                aria-label="Ir a la sección de política de privacidad">Privacidad</a>
        </li>
        <li class="nav-item my-3 my-sm-0 ms-sm-2">
            <a href="<?php echo BASE_URL; ?>/students.php" class="nav-link text-light"
                aria-label="Ir a la sección de estudiantes">Estudiantes</a>
        </li>
    </ul>
</footer>