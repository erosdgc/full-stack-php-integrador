<?php
require_once dirname(__DIR__) . '/data/sesion.php'; // Gestión de sesión

// Comprobar si existe un mensaje en la sesión y asignarlo al modal
$mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : "";
unset($_SESSION['mensaje']); // Limpiar el mensaje después de mostrarlo
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../components/head.php'; ?>

<body class="d-flex flex-column">
  <?php include '../components/navbar.php'; ?>
  <div class="registro-main d-flex">
    <!-- Imagen de fondo -->
    <img loading="lazy" src="../assets/img/ba4.jpg" alt="Ciudad de Buenos Aires por la noche" class="img-registro">

    <!-- Formulario de registro -->
    <div class="card reg-card shadow-sm col-11 col-sm-10 col-md-9 col-lg-7 col-xl-6 col-xxl-5 mx-auto px-2 px-md-3 py-2 my-3 mb-md-0">
      <form action="../data/proceso_registro.php" method="POST" class="row g-4 p-0 m-0">
        <h1 class="fs-3 mt-3">Registro</h1>
        <p class="mt-2">A continuación, llená el siguiente formulario para inscribirte en la plataforma:
        </p>
        <div class="row m-auto p-0">
          <?php
          $fields = [
            ['label' => 'Nombre:', 'id' => 'nombre', 'type' => 'text', 'required' => true],
            ['label' => 'Apellido:', 'id' => 'apellido', 'type' => 'text', 'required' => true],
            ['label' => 'Email:', 'id' => 'email', 'type' => 'email', 'required' => true],
            ['label' => 'Usuario:', 'id' => 'usuario', 'type' => 'text', 'required' => true],
            ['label' => 'Fecha de Nacimiento:', 'id' => 'fecha_nacimiento', 'type' => 'date', 'required' => true],
            ['label' => 'DNI:', 'id' => 'dni', 'type' => 'number', 'required' => true],
            ['label' => 'Contraseña:', 'id' => 'pass', 'type' => 'password', 'required' => true],
            ['label' => 'Confirmar Contraseña:', 'id' => 'confirm_pass', 'type' => 'password', 'required' => true],
          ];
          foreach ($fields as $field) {
            echo "<div class='form-group col-md-6 pt-2 pt-md-3'>";
            echo "<label for='{$field['id']}'>{$field['label']}</label>";
            echo "<input type='{$field['type']}' id='{$field['id']}' name='{$field['id']}' class='form-control shadow-sm mt-1' ";
            echo $field['required'] ? 'required>' : '>';
            echo "</div>";
          }
          ?>
          <div class="form-group pt-2 pt-md-3 mx-auto">
            <button type="submit" class="btn btn-success text-shadow-sm col-12 mt-3 p-2 shadow-sm">Registrar</button>
          </div>
          <div class="mt-3">
            <p>¿Ya tenés una cuenta? <a href="iniciar-sesion.php">Iniciar sesión</a>.</p>
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
          <h5 class="modal-title" id="mensajeModalLabel">Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="mensajeModalBody">
          <!-- El mensaje se insertará aquí -->
          <?php
          if (!empty($mensaje)) {
            echo '<p>' . htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') . '</p>';
          }
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="align-items-end">
    <?php include '../components/footer.php'; ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Mostrar el modal si hay un mensaje
    <?php if (!empty($mensaje)): ?>
      var myModal = new bootstrap.Modal(document.getElementById('mensajeModal'));
      myModal.show();
    <?php endif; ?>
  </script>
  <script src="../scripts/js/navbar.js"></script>
</body>

</html>