<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Configuración global
require_once 'config.php';
// Conexión a la base de datos
require_once 'db_connection.php';
?>
