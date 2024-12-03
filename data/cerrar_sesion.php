<?php

session_unset();  // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión

// Eliminar la cookie de sesión
if (isset($_COOKIE['session_token'])) {
    setcookie('session_token', '', time() - 3600, "/", "", false, true); // Establece la cookie con una fecha de expiración pasada
}

header("Location: " . BASE_URL . "/index.php");
exit();
?>