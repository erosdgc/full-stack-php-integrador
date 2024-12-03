let nombre = document.getElementById('nombre');
let apellido = document.getElementById('apellido');
let email = document.getElementById('email');
let category = document.getElementById('selectCategory');
let validacion = [];

// Función para limpiar el formulario
function resetForm() {
    nombre.value = "";
    apellido.value = "";
    email.value = "";
    quantity.value = "";
    category.value = "";
    document.getElementById('firstNameInput').innerHTML = '';
    document.getElementById('lastNameInput').innerHTML = '';
    document.getElementById('emailInput').innerHTML = '';
    document.getElementById('quantityInput').innerHTML = '';
    document.getElementById('categoryInput').innerHTML = '';
    document.getElementById('total').innerHTML = 'Total a pagar: $';
}

// Input bajo condición de true o false
function dataInput() {
    validate();
    if (validate() == true) {
        result();
    }
}

// Validación del campo "Categoría" (en el caso de que valga default o blank)
function validate() {
    if (category.value == "Elegir categoría") {
        document.getElementById('categoryInput').innerHTML = '* Elegir una categoría';
        validacion[0] = false;
    } else {
        document.getElementById('categoryInput').innerHTML = '';
        validacion[0] = true;
        if (validacion[0] == true) {
            return result()
        } else {
            document.getElementById('total').innerHTML = 'Total a pagar: $';
        }
    }
}

// Cuentas según resultado
function result() {
    categoryValue = category.value
    if (categoryValue == 'estudiante') {
        document.getElementById('total').innerHTML = `Total a pagar: $${200 * 0.2 * quantity.value}`;
    } else if (categoryValue == 'trainee') {
        document.getElementById('total').innerHTML = `Total a pagar: $${200 * 0.5 * quantity.value}`;
    } else if (categoryValue == 'junior') {
        document.getElementById('total').innerHTML = `Total a pagar: $${200 * 0.85 * quantity.value}`;
    } else if (categoryValue == 'general') {
        document.getElementById('total').innerHTML = `Total a pagar: $${200 * quantity.value}`;
    }
}