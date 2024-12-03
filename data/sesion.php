<?php
require_once 'init.php';

// 1. Obtener datos enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identificador = trim(htmlspecialchars($_POST['identificador'], ENT_QUOTES, 'UTF-8'));
    $pass = $_POST['pass'];

    // Verificar si los campos no están vacíos
    if (empty($identificador) || empty($pass)) {
        $_SESSION['mensaje'] = 'Por favor, ingrese tanto el usuario como la contraseña.';
        header('Location: ../pages/iniciar-sesion.php');
        exit;
    }

    try {
        // 2. Consulta a la base de datos
        $sql = "SELECT * FROM usuarios WHERE (usuario = :identificador OR email = :identificador OR dni = :identificador)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':identificador' => $identificador]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($pass, $user['pass'])) {
            // 3. Generar token y guardar en la base de datos
            $token = bin2hex(random_bytes(16));
            $sqlUpdate = "UPDATE usuarios SET session_token = :token WHERE id = :id";
            $stmtUpdate = $pdo->prepare($sqlUpdate);
            $stmtUpdate->execute([':token' => $token, ':id' => $user['id']]);

            // 4. Crear cookie con el token
            setcookie('session_token', $token, time() + (30 * 24 * 60 * 60), "/", "", false, true);

            // 5. Iniciar sesión
            $_SESSION['nombre'] = $user['nombre'];
            $_SESSION['mensaje'] = "¡Bienvenido " . $user['nombre'] . "!";
            header('Location: ../index.php');
            exit;
        } else {
            $_SESSION['mensaje'] = 'Credenciales incorrectas. Por favor, verificá tus datos.';
            header('Location: ../pages/iniciar-sesion.php');
            exit;
        }
    } catch (PDOException $e) {
        die("Error al procesar la solicitud: " . $e->getMessage());
    }
}

// 6. Si ya existe cookie, verificar token
if (isset($_COOKIE['session_token'])) {
    $session_token = $_COOKIE['session_token'];
    $query = "SELECT * FROM usuarios WHERE session_token = :session_token";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':session_token' => $session_token]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['usuario_id'] = $user['id'];
    } else {
        setcookie('session_token', '', time() - 3600, "/", "", false, true);
        header("Location: ../pages/iniciar-sesion.php");
        exit();
    }
}
?>
