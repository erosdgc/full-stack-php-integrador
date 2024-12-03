<?php
// Validar si el token existe en la cookie
if (isset($_COOKIE['session_token'])) {
    $session_token = $_COOKIE['session_token'];

    // Limpiar el token de la base de datos
    $query = "UPDATE usuarios SET session_token = NULL WHERE session_token = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$session_token]);
}

// Destruir la sesión
session_destroy();

// Eliminar cookie de sesión
setcookie('session_token', '', time() - 3600, "/");

exit;
?>