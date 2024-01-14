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

<form action="./redireccion.php" method="post" onsubmit="return validarFormulario()">
  <label for="figura">Selecciona una figura geométrica:</label>
  <select name="figura" id="figura" onchange="mostrarFormulario()">
    <option value="" selected disabled hidden>Selecciona una opción...</option>
    <option value="triangulo">Triángulo</option>
    <option value="rectangulo">Rectángulo</option>
    <option value="cuadrado">Cuadrado</option>
    <option value="circulo">Círculo</option>
  </select>
  <br>

  <!-- Formulario para Triángulo -->
  <div id="trianguloForm" class="formulario hidden">
      <label for="baseTriangulo">Base:</label>
      <input type="text" name="baseTriangulo" id="baseTriangulo">
      <span id="triangulo-base-error" style="color: red;"></span>
      <br>
      <label for="alturaTriangulo">Altura:</label>
      <input type="text" name="alturaTriangulo" id="alturaTriangulo">
      <span id="triangulo-altura-error" style="color: red;"></span>
  </div>

  <!-- Formulario para Rectángulo -->
  <div id="rectanguloForm" class="hidden">
    <label for="lado1Rectangulo">Lado 1:</label>
    <input type="text" name="lado1Rectangulo" id="lado1Rectangulo">
    <span id="rectangulo-lado1-error" style="color: red;"></span>
    <br>
    <label for="lado2Rectangulo">Lado 2:</label>
    <input type="text" name="lado2Rectangulo" id="lado2Rectangulo">
    <span id="rectangulo-lado2-error" style="color: red;"></span>
  </div>

  <!-- Formulario para Cuadrado -->
  <div id="cuadradoForm" class="hidden">
    <label for="ladoCuadrado">Lado:</label>
    <input type="text" name="ladoCuadrado" id="ladoCuadrado">
    <span id="cuadrado-lado-error" style="color: red;"></span>
  </div>

  <!-- Formulario para Círculo -->
  <div id="circuloForm" class="hidden">
    <label for="radioCirculo">Radio:</label>
    <input type="text" name="radioCirculo" id="radioCirculo">
    <span id="circulo-radio-error" style="color: red;"></span>
  </div>

  <br>
  <input type="submit" value="Enviar">
</form>
<script src="script.js"></script>

</body>
</html>