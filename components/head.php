<?php
if (!defined('BASE_URL')) {
    die('Acceso no autorizado.');  // Asegura que no haya acceso sin la constante BASE_URL definida
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/php-cac-2022-integrador/data/config.php';  // Verifica la ruta a config.php
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $siteTitle; ?></title>  <!-- Usar el título definido en config.php -->
    <link rel="icon" href="<?php echo $assetsPath; ?>/img/codoacodo.png" />
    <meta name="description"
        content="Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!" />
    <meta name="keywords"
        content="BUENOS AIRES, STEVE JOBS, BILL GATES, ADA LOVELACE, CODO A CODO, 4.0, CONFERENCIA, ORADOR, ORADORES, TICKETS, ARGENTINA, HONOLULU, ESTADOS UNIDOS, PRENSA" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $cssPath; ?>/custom.css" />
</head>
