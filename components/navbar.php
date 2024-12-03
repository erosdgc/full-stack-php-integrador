<header id="header" class="sticky-top bg-dark text-nowrap">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid mx-1 mx-sm-3 mx-xl-c justify-content-between align-items-center">
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
                <img src="<?php echo $assetsPath; ?>/img/codoacodo.png" alt="Logo">
            </a>
            <h1 class="me-auto my-auto">Conf Bs As</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" target="_blank"
                        href="https://buenosaires.gob.ar/industriascreativas/bafim/buenos-aires-feria-internacional-de-musica/conferencias">La
                        conferencia</a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/#oradores">Los oradores</a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/#lugar_fecha">El lugar y la fecha</a>
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/#charla-ignite">Conviértete en orador</a>
                    <a class="nav-link text-success" href="<?php echo BASE_URL; ?>/pages/tickets.php">Comprar tickets</a>
                    <?php if (isset($_SESSION['usuario'])): ?>
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#confirmLogoutModal">
                            Cerrar Sesión (<?php echo htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8'); ?>)
                        </a>
                    <?php else: ?>
                        <a class="nav-link text-light" href="<?php echo BASE_URL; ?>/pages/iniciar-sesion.php">Iniciar
                            Sesión</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal de Confirmación de Cierre de Sesión -->
    <div class="modal fade" id="confirmLogoutModal" tabindex="-1" aria-labelledby="confirmLogoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmLogoutModalLabel">Cerrar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que querés cerrar sesión?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="<?php echo BASE_URL; ?>/data/cerrar_sesion.php" class="btn btn-danger">Salir</a>
                </div>
            </div>
        </div>
    </div>

</header>