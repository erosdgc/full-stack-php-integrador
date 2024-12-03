<?php
// Establecer conexión con la base de datos
$host = 'localhost';  // Cambia esto según tu configuración
$dbname = 'cac2c2022'; // Nombre de tu base de datos
$username = 'root';  // Tu usuario de base de datos
$password = '4InDf23k7ppDlmv5';  // Tu contraseña de base de datos

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
}

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y sanitizarlos
    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
    $apellido = htmlspecialchars($_POST['apellido'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $telefono = htmlspecialchars($_POST['telefono'], ENT_QUOTES, 'UTF-8');
    $mensaje = htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8');

    // Preparar la consulta para insertar los datos
    $sql = "INSERT INTO charla_ignite (nombre, apellido, email, telefono, mensaje) VALUES (:nombre, :apellido, :email, :telefono, :mensaje)";
    $stmt = $pdo->prepare($sql);

    // Ejecutar la consulta con los datos del formulario
    try {
        $stmt->execute([
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':email' => $email,
            ':telefono' => $telefono,
            ':mensaje' => $mensaje
        ]);
        echo "Datos guardados correctamente.";
    } catch (PDOException $e) {
        echo "Error al guardar los datos: " . $e->getMessage();
    }
}
?>