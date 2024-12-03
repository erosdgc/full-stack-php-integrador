<?php
require_once 'init.php';

// Inicializar la variable de mensaje
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y sanitizarlos
    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
    $apellido = htmlspecialchars($_POST['apellido'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $usuario = htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8');
    $fecha_nacimiento = $_POST['fecha_nacimiento'];  // Tipo date
    $dni = $_POST['dni'];  // Tipo int
    $pass = $_POST['pass'];  // Contraseña
    $confirm_pass = $_POST['confirm_pass'];  // Confirmación de la contraseña

    // Verificar que las contraseñas coincidan
    if ($pass !== $confirm_pass) {
        $mensaje = "Las contraseñas no coinciden. Por favor, vuelve a intentarlo.";
    } else {
        // Verificar si el email ya está registrado
        $sql_email = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
        $stmt_email = $pdo->prepare($sql_email);
        $stmt_email->execute([':email' => $email]);
        $email_existente = $stmt_email->fetchColumn();

        if ($email_existente > 0) {
            $mensaje = "El correo electrónico $email ya está registrado. Usá otro correo o inicia sesión.";
        } else {
            // Verificar si el nombre de usuario ya está registrado
            $sql_usuario = "SELECT COUNT(*) FROM usuarios WHERE usuario = :usuario";
            $stmt_usuario = $pdo->prepare($sql_usuario);
            $stmt_usuario->execute([':usuario' => $usuario]);
            $usuario_existente = $stmt_usuario->fetchColumn();

            if ($usuario_existente > 0) {
                $mensaje = "El nombre de usuario ya está en uso. Por favor, elige otro.";
            } else {
                // Hashear la contraseña antes de guardarla
                $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

                // Preparar la consulta para insertar los datos
                $sql = "INSERT INTO usuarios (email, nombre, apellido, usuario, fecha_nacimiento, dni, pass) 
                    VALUES (:email, :nombre, :apellido, :usuario, :fecha_nacimiento, :dni, :pass)";
                $stmt = $pdo->prepare($sql);

                // Ejecutar la consulta con los datos del formulario
                try {
                    $stmt->execute([
                        ':email' => $email,
                        ':nombre' => $nombre,
                        ':apellido' => $apellido,
                        ':usuario' => $usuario,
                        ':fecha_nacimiento' => $fecha_nacimiento,
                        ':dni' => $dni,
                        ':pass' => $hashed_pass // Usar la contraseña hasheada
                    ]);

                    // Mensaje con el link a iniciar sesión
                    $mensaje = "¡Registro exitoso! Ya podés ";
                    echo BASE_URL . "<a href='/iniciar-sesion.php'>iniciar sesión</a>";
                } catch (PDOException $e) {
                    // Mensaje en caso de error
                    $mensaje = "Error al guardar los datos: " . $e->getMessage();
                }
            }
        }
    }
}

// Guardar el mensaje en la sesión
$_SESSION['mensaje'] = $mensaje;

// Redirigir al usuario de vuelta a la página de registro
header('Location: ../pages/registro.php');
exit();
?>