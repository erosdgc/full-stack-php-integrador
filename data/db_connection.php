<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'cac2c2022');
define('DB_USER', 'root');
define('DB_PASS', '4InDf23k7ppDlmv5');

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
