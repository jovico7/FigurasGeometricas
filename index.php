<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleccionar figura geométrica</title>
  <style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body>

<form action="redireccion.php" method="post">
  <label for="figura">Selecciona una figura geométrica:</label>
  <select name="figura" id="figura" onchange="mostrarFormulario()">
    <option value="triangulo">Triángulo</option>
    <option value="rectangulo">Rectángulo</option>
    <option value="cuadrado">Cuadrado</option>
    <option value="circulo">Círculo</option>
  </select>
  <br>

  <!-- Formulario para Triángulo -->
  <div id="trianguloForm" class="hidden">
    <label for="baseTriangulo">Base:</label>
    <input type="text" name="baseTriangulo">
    <br>
    <label for="alturaTriangulo">Altura:</label>
    <input type="text" name="alturaTriangulo">
  </div>

  <!-- Formulario para Rectángulo -->
  <div id="rectanguloForm" class="hidden">
    <label for="lado1Rectangulo">Lado 1:</label>
    <input type="text" name="lado1Rectangulo">
    <br>
    <label for="lado2Rectangulo">Lado 2:</label>
    <input type="text" name="lado2Rectangulo">
  </div>

  <!-- Formulario para Cuadrado -->
  <div id="cuadradoForm" class="hidden">
    <label for="ladoCuadrado">Lado:</label>
    <input type="text" name="ladoCuadrado">
  </div>

  <!-- Formulario para Círculo -->
  <div id="circuloForm" class="hidden">
    <label for="radioCirculo">Radio:</label>
    <input type="text" name="radioCirculo">
  </div>

  <br>
  <input type="submit" value="Enviar">
</form>

<script>
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
</script>

</body>
</html>