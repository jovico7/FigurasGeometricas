function mostrarFormulario() {
    // Ocultar todos los formularios
    document.getElementById("trianguloForm").classList.add("hidden");
    document.getElementById("rectanguloForm").classList.add("hidden");
    document.getElementById("cuadradoForm").classList.add("hidden");
    document.getElementById("circuloForm").classList.add("hidden");

    // Obtener el valor seleccionado
    var seleccion = document.getElementById("figura").value;

    // Mostrar el formulario correspondiente
    document.getElementById(seleccion + "Form").classList.remove("hidden");
}

function validarFormulario() {
    var figuraSeleccionada = document.getElementById('figura').value;

    switch (figuraSeleccionada) {
        case 'triangulo':
            return validarTriangulo();
        case 'rectangulo':
            return validarRectangulo();
        case 'cuadrado':
            return validarCuadrado();
        case 'circulo':
            return validarCirculo();
        default:
            alert('Selecciona una figura válida.');
            return false;
    }
}

function validarTriangulo() {
    var baseTriangulo = document.getElementById('baseTriangulo').value.trim();
    var alturaTriangulo = document.getElementById('alturaTriangulo').value.trim();

    // Limpiar mensajes de error
    document.getElementById('triangulo-base-error').textContent = '';
    document.getElementById('triangulo-altura-error').textContent = '';

    var hayErrores = false;

    // Validar la base del triángulo
    if (baseTriangulo === '') {
        document.getElementById('triangulo-base-error').textContent = 'La base no puede estar vacía';
        hayErrores = true;
    } else if (isNaN(baseTriangulo) || parseFloat(baseTriangulo) <= 0) {
        document.getElementById('triangulo-base-error').textContent = 'La base debe ser un número mayor que cero';
        hayErrores = true;
    }

    // Validar la altura del triángulo
    if (alturaTriangulo === '') {
        document.getElementById('triangulo-altura-error').textContent = 'La altura no puede estar vacía';
        hayErrores = true;
    } else if (isNaN(alturaTriangulo) || parseFloat(alturaTriangulo) <= 0) {
        document.getElementById('triangulo-altura-error').textContent = 'La altura debe ser un número mayor que cero';
        hayErrores = true;
    }

    // Si hay errores, devolver false; de lo contrario, devolver true
    return !hayErrores;
}

function validarRectangulo() {
    var lado1Rectangulo = document.getElementById('lado1Rectangulo').value.trim();
    var lado2Rectangulo = document.getElementById('lado2Rectangulo').value.trim();

    // Limpiar mensajes de error
    document.getElementById('rectangulo-lado1-error').textContent = '';
    document.getElementById('rectangulo-lado2-error').textContent = '';

    var hayErrores = false;

    // Validar el primer lado del rectángulo
    if (lado1Rectangulo === '') {
        document.getElementById('rectangulo-lado1-error').textContent = 'El primer lado no puede estar vacío';
        hayErrores = true;
    } else if (isNaN(lado1Rectangulo) || parseFloat(lado1Rectangulo) <= 0) {
        document.getElementById('rectangulo-lado1-error').textContent = 'El primer lado debe ser un número mayor que cero';
        hayErrores = true;
    }

    // Validar el segundo lado del rectángulo
    if (lado2Rectangulo === '') {
        document.getElementById('rectangulo-lado2-error').textContent = 'El segundo lado no puede estar vacío';
        hayErrores = true;
    } else if (isNaN(lado2Rectangulo) || parseFloat(lado2Rectangulo) <= 0) {
        document.getElementById('rectangulo-lado2-error').textContent = 'El segundo lado debe ser un número mayor que cero';
        hayErrores = true;
    }

    // Si hay errores, devolver false; de lo contrario, devolver true
    return !hayErrores;
}

function validarCuadrado() {
    var ladoCuadrado = document.getElementById('ladoCuadrado').value.trim();

    // Limpiar mensajes de error
    document.getElementById('cuadrado-lado-error').textContent = '';

    var hayErrores = false;

    // Validar la base del triángulo
    if (ladoCuadrado === '') {
        document.getElementById('cuadrado-lado-error').textContent = 'El lado no puede estar vacío';
        hayErrores = true;
    } else if (isNaN(ladoCuadrado) || parseFloat(ladoCuadrado) <= 0) {
        document.getElementById('cuadrado-lado-error').textContent = 'El lado debe ser un número mayor que cero';
        hayErrores = true;
    }

    // Si hay errores, devolver false; de lo contrario, devolver true
    return !hayErrores;
}

function validarCirculo() {
    var radioCirculo = document.getElementById('radioCirculo').value.trim();

    // Limpiar mensajes de error
    document.getElementById('circulo-radio-error').textContent = '';

    var hayErrores = false;

    // Validar la base del triángulo
    if (radioCirculo === '') {
        document.getElementById('circulo-radio-error').textContent = 'El radio no puede estar vacío';
        hayErrores = true;
    } else if (isNaN(radioCirculo) || parseFloat(radioCirculo) <= 0) {
        document.getElementById('circulo-radio-error').textContent = 'El radio debe ser un número mayor que cero';
        hayErrores = true;
    }

    // Si hay errores, devolver false; de lo contrario, devolver true
    return !hayErrores;
}