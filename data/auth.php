<?php
require_once 'data/init.php';        // Inicialización del sistema

// Verificar si el usuario no ha iniciado sesión y tiene la cookie
if (!isset($_SESSION['nombre']) && isset($_COOKIE['session_token'])) {
    $token = $_COOKIE['session_token'];

    try {
        // Buscar al usuario por el token
        $sql = "SELECT * FROM usuarios WHERE session_token = :token";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':token' => $token]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Restaurar sesión
            $_SESSION['nombre'] = $user['nombre'];
            $_SESSION['usuario_id'] = $user['id'];
        } else {
            // Si el token no es válido, eliminar la cookie y redirigir a login
            setcookie('session_token', '', time() - 3600, "/", "", false, true);
            header("Location: " . BASE_URL . "/iniciar-sesion.php");
            exit();
        }
    } catch (PDOException $e) {
        die("Error al procesar la solicitud: " . $e->getMessage());
    }
}
?>
