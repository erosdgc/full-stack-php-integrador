<?php
require_once 'data/init.php';        // Inicialización del sistema
include './data/tagClasses.php';
include './data/tagLinks.php';
include './data/speakers.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include './components/head.php'; ?>

<body>
  <?php include './components/navbar.php'; ?>
  <!-- Hero -->
  <article id="hero" class="carousel slide hero overflow-hidden my-0 py-0" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video autoplay muted loop playsinline class="d-block w-100 carousel-img" alt="Buenos Aires 1">
          <source src="assets/vid/ba2-vid.mp4" type="video/mp4">
          Tu navegador no soporta videos HTML5.
        </video>
      </div>
      <div class="carousel-item">
        <video autoplay muted loop playsinline class="d-block carousel-img" alt="Buenos Aires 2">
          <source src="assets/vid/ba-vid.mp4" type="video/mp4">
          Tu navegador no soporta videos HTML5.
        </video>
      </div>
      <div class="carousel-item">
        <video autoplay muted loop playsinline class="d-block carousel-img" alt="Buenos Aires 3" />
        <source src="assets/vid/conf-vid.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
        </video>
      </div>
    </div>
    <div class="overlay d-flex justify-content-end" data-aos="fade-up" data-aos-delay="150">
      <div
        class="text col-10 col-sm-10 col-lg-6 col-xxl-5 d-flex flex-column justify-content-center align-items-end me-4 me-sm-5 my-auto">
        <h1>Conf Bs As</h1>
        <p class="text-end main-paragraph">
          Bs As llega por primera vez a Argentina. Un evento para compartir
          con nuestra comunidad el conocimiento y experiencia de los expertos
          que están creando el futuro de Internet. Ven a conocer a miembros
          del evento, a otros estudiantes de Codo a Codo y los oradores de
          primer nivel que tenemos para ti. Te esperamos!
        </p>
        <div class="buttons mt-1 mt-sm-3 col-md-8 d-flex flex-column flex-md-row ms-auto gap-3">
          <a role="button" class="btn btn-transparent text-shadow-sm shadow me-sm-2 col-12 col-sm"
            href="<?php echo BASE_URL; ?>/#charla-ignite">
            Quiero ser orador
          </a>
          <a role="button" class="btn btn-success text-shadow-sm shadow ms-sm-2 col-12 col-sm mt-2 mt-sm-3" href="<?php echo BASE_URL; ?>/pages/tickets.php">
            Comprar tickets
          </a>
        </div>
      </div>
    </div>
  </article>

  <!-- Main (Cards) -->
  <main class="m-auto mt-0 pt-0" id="oradores">
    <div class="conoce d-flex flex-column align-items-center mt-3">
      <p class="mb-0">CONOCE A LOS</p>
      <h1 class="">ORADORES</h1>
      <div class="container-xxl m-auto row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($oradores as $orador): ?>
          <div class="col">
            <div class="card h-100 shadow-sm">
              <img loading="lazy" src="<?= htmlspecialchars(BASE_URL . $orador['img'], ENT_QUOTES, 'UTF-8') ?>"
                class="card-img-top"
                alt="<?= htmlspecialchars('Imagen de ' . $orador['nombre'] . ', conferencista en Conferencia Buenos Aires', ENT_QUOTES, 'UTF-8') ?>" />

              <div class="card-body">
                <div class="card-info-btns d-inline-flex">
                  <?php foreach ($orador['tags'] as $tag):
                    $btnClass = $tagClasses[$tag] ?? "btn-default"; ?>
                    <a target="_blank" href="<?= htmlspecialchars($tagLinks[$tag], ENT_QUOTES, 'UTF-8') ?>"
                      class="fw-bold py-0 px-1 me-2 btn <?= htmlspecialchars($btnClass, ENT_QUOTES, 'UTF-8') ?> mb-2">
                      <?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                  <?php endforeach; ?>
                </div>
                <h4 class="card-title"><?= htmlspecialchars($orador['nombre'], ENT_QUOTES, 'UTF-8') ?></h4>
                <p class="card-text"><?= htmlspecialchars($orador['descripcion'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

  <!-- Article -->
  <article id="lugar_fecha" class="d-flex flex-column flex-lg-row mt-5 w-100">
    <img loading="lazy" class="honolulu col-12 col-lg-6 p-0" src="assets/img/honolulu.jpg"
      alt="Playa en Honolulu, isla de Oahu, Hawái." />
    <section class="col-12 col-lg-6 p-4 aside-text bg-dark">
      <h1>Bs As - Octubre</h1>
      <p>
        Buenos Aires es la provincia y localidad más grande del estado de
        Argentina. En los Estados Unidos, Honolulu es la más sureña de entre
        las principales ciudades estadounidenses. Aunque el nombre de Honolulu
        se refiere al área urbana de la costa sureste de la isla de Oahu, la
        ciudad y el condado de Honolulu han formado una ciudad-condado
        lidada que cubre toda la ciudad (aproximadamente 600km2 de
        superficie).
      </p>
      <a href="https://es.wikipedia.org/wiki/Buenos_Aires" target="_blank">
        <button class="btn btn-transparent">Conoce más</button>
      </a>
    </section>
  </article>

  <!-- Charla ignite -->
  <aside id="charla-ignite" class="m-auto overflow-hidden">
    <div class="conviertete d-flex flex-column align-items-center mt-3">
      <p class="mb-0">CONVIÉRTETE EN UN</p>
      <h1 class="">ORADOR</h1>
      <p class="ignite text-center mx-2 mx-md-0">
        Anótate como orador para dar una
        <a class="text-dark"
          href="https://www.yoscoaching.com/blog/que-es-la-presentacion-ignite-y-como-se-hace-guia-de-5-pasos-para-crear-la-tuya/"
          target="_blank">charla ignite</a>. ¡Cuéntanos de qué quieres hablar!
      </p>
    </div>
    <!-- Form -->
    <form action="./data/charla_ignite.php" method="POST" class="row row-cols-1 row-cols-md-2 g-4 p-0 m-0">
      <div class="row m-auto p-md-0">
        <div class="form-group col-md-6 pe-md-2 p-0">
          <input name="nombre" type="text" class="form-control shadow-sm" placeholder="Nombre" required />
        </div>
        <div class="form-group col-md-6 ps-md-2 p-0 pt-3 pt-md-0">
          <input name="apellido" type="text" class="form-control shadow-sm" placeholder="Apellido" required />
        </div>
        <div class="form-group col-md-12 mt-2 p-0 pt-2 pt-lg-2">
          <input name="email" type="email" class="form-control shadow-sm" placeholder="Email" required />
        </div>
        <div class="form-group col-md-12 mt-2 p-0 pt-2 pt-lg-2">
          <input name="telefono" type="text" class="form-control shadow-sm" placeholder="Teléfono" required />
        </div>
        <div class="form-group col-md-12 mt-2 p-2 px-0">
          <textarea name="mensaje" class="form-control shadow-sm" id="formTextAreaInput" rows="3"
            placeholder="¿Sobre qué quieres hablar?" required></textarea>
          <label class="text-muted mt-2" for="formTextArea">Recuerda incluir un título para tu charla.</label>
        </div>
        <button type="submit" class="btn btn-success text-shadow-sm col-md-12 my-3 p-2 shadow-sm">
          Enviar
        </button>
      </div>
    </form>
  </aside>

  <?php include './components/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="scripts/js/navbar.js"></script>


</body>

</html>