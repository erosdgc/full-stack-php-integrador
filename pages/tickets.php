<?php require_once '../data/init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php include '../components/head.php'; ?>

<body>
    <?php include '../components/navbar.php'; ?>
    <main class="container col-lg-10 col-xl-8 col-xxl-6 my-5 tickets-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card border border-2 border-primary rounded-0 text-center estudiante">
                    <div class="card-body mx-auto my-4">
                        <h3 class="card-title">Estudiante</h3>
                        <p class="card-text fs-5 mt-3">Tienen un descuento</p>
                        <h4 class="mb-3">80%</h4>
                        <p class="text-muted mb-0">*presentar documentación</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <div class="card border border-2 border-secondary rounded-0 text-center trainee">
                    <div class="card-body mx-auto my-4">
                        <h3 class="card-title">Trainee</h3>
                        <p class="card-text fs-5 mt-3">Tienen un descuento</p>
                        <h4 class="mb-3">50%</h4>
                        <p class="text-muted mb-0">*presentar documentación</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <div class="card border border-2 border-warning rounded-0 text-center junior">
                    <div class="card-body mx-auto my-4">
                        <h3 class="card-title">Junior</h3>
                        <p class="card-text fs-5 mt-3">Tienen un descuento</p>
                        <h4 class="mb-3">15%</h4>
                        <p class="text-muted mb-0">*presentar documentación</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="venta text-center my-4">
            <p class="mb-1">VENTA</p>
            <h1>VALOR DE TICKET $200</h1>
        </div>

        <form action="" id="tickets_form" onsubmit="dataInput(); return false">
            <div class="row">
                <div class="col-12 col-sm-6 pe-sm-2">
                    <input id="nombre" type="text" class="form-control text-capitalize" placeholder="Nombre"
                        aria-label="Nombre" required />
                    <p id="firstNameInput"></p>
                </div>
                <div class="col-12 col-sm-6 ps-sm-2">
                    <input id="apellido" type="text" class="form-control text-capitalize" placeholder="Apellido"
                        aria-label="Apellido" required />
                    <p id="lastNameInput"></p>
                </div>
            </div>
            <div class="col">
                <input type="email" class="form-control" id="email" placeholder="Correo" required />
                <p id="emailInput"></p>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 pe-sm-2">
                    <p class="fs-5 mb-2">Cantidad</p>
                    <input type="number" id="quantity" class="form-control" placeholder="Cantidad" aria-label="Cantidad"
                        required />
                    <p id="quantityInput"></p>
                </div>

                <div class="col-12 col-sm-6 ps-sm-2"">
            <p class=" fs-5 mb-2">Categoría</p>
                    <select name="selectCategory" id="selectCategory" class="form-select"
                        aria-label="Category selection">
                        <option selected>Elegir categoría</option>
                        <option value="estudiante">Estudiante</option>
                        <option value="trainee">Trainee</option>
                        <option value="junior">Junior</option>
                        <option value="general">General</option>
                    </select>
                    <p id="categoryInput"></p>
                </div>
            </div>

            <div class="form-large my-3">
                <h5 id="total" class="form-control bg-info border-info py-3 fs-5">
                    Total a pagar: $
                </h5>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md pe-md-2 mb-3 mb-md-0">
                    <button onclick="resetForm()" class="btn btn-warning text-light fs-5 py-2 col-12" type="button">
                        Borrar
                    </button>
                </div>
                <div class="col-12 col-md ps-md-2">
                    <button onclick="dataInput()" class="btn btn-warning text-light fs-5 py-2 col-12" type="submit"
                        form="tickets_form">
                        Resumen
                    </button>
                </div>
            </div>
        </form>
    </main>

    <?php include '../components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="../scripts/js/navbar.js"></script>


</body>

</html>