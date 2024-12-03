<?php
require_once dirname(__DIR__) . '/data/sesion.php'; // Gestión de sesión

$mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : "";
unset($_SESSION['mensaje']);
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../components/head.php'; ?>

<body>
    <?php include '../components/navbar.php'; ?>

    <div class="registro-main d-flex">
        <!-- Imagen de fondo -->
        <img loading="lazy" src="../assets/img/ba5.jpg" alt="Ciudad de Buenos Aires al atardecer. Vista del Obelisco."
            class="img-registro">

        <!-- Formulario de inicio de sesión -->
        <div class="card reg-card shadow-sm col-11 col-md-6 col-xl-5 col-xxl-4 mx-auto px-2 px-md-3 py-2 my-3 mb-md-0">
            <form action="../data/sesion.php" method="POST" class="row g-4 p-0 m-0">
                <h1 class="fs-3 mt-3">Iniciar Sesión</h1>
                <p class="mt-2">Ingresa tus credenciales para acceder a tu cuenta:</p>

                <div class="row m-auto p-0">
                    <div class="form-group pt-2 pt-md-3">
                        <label for="identificador">Nombre de usuario, email o DNI:</label>
                        <input type="text" id="identificador" name="identificador" class="form-control shadow-sm mt-1"
                            required>
                    </div>

                    <div class="form-group pt-2 pt-md-3">
                        <label for="pass">Contraseña:</label>
                        <input type="password" id="pass" name="pass" class="form-control shadow-sm mt-1" required>
                    </div>

                    <div class="form-group pt-2 pt-md-3">
                        <button type="submit"
                            class="btn btn-success text-shadow-sm col-12 mt-3 p-2 shadow-s">Ingresar</button>
                    </div>

                    <div class="mt-3">
                        <p>¿No tienes una cuenta? <a href="registro.php">Registrarse</a>.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mensaje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php if (!empty($mensaje))
                        echo htmlspecialchars($mensaje); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        <?php if (!empty($mensaje)): ?>
            var myModal = new bootstrap.Modal(document.getElementById('mensajeModal'));
            myModal.show();
        <?php endif; ?>
    </script>
    <script src="../scripts/js/navbar.js"></script>
</body>

</html>