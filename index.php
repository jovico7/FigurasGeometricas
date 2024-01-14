<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleccionar figura geométrica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Agrega este enlace al CDN de SweetAlert2 después del enlace de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h3>Cálculo de Figuras Geométricas</h3>
<form id="formFiguras" action="./redireccion.php" method="post" onsubmit="return validarFormulario()">
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
      <input type="number" name="baseTriangulo" id="baseTriangulo">
      <span id="triangulo-base-error" style="color: red;"></span>
      <br>
      <label for="alturaTriangulo">Altura:</label>
      <input type="number" name="alturaTriangulo" id="alturaTriangulo" class="separacion-inputs">
      <span id="triangulo-altura-error" style="color: red;"></span>
  </div>

  <!-- Formulario para Rectángulo -->
  <div id="rectanguloForm" class="hidden">
      <label for="lado1Rectangulo">Lado 1:</label>
      <input type="number" name="lado1Rectangulo" id="lado1Rectangulo">
      <span id="rectangulo-lado1-error" style="color: red;"></span>
      <br>
      <label for="lado2Rectangulo">Lado 2:</label>
      <input type="number" name="lado2Rectangulo" id="lado2Rectangulo" class="separacion-inputs">
      <span id="rectangulo-lado2-error" style="color: red;"></span>
  </div>


  <!-- Formulario para Cuadrado -->
  <div id="cuadradoForm" class="hidden">
    <label for="ladoCuadrado">Lado:</label>
    <input type="number" name="ladoCuadrado" id="ladoCuadrado">
    <span id="cuadrado-lado-error" style="color: red;"></span>
  </div>

  <!-- Formulario para Círculo -->
  <div id="circuloForm" class="hidden">
    <label for="radioCirculo">Radio:</label>
    <input type="number" name="radioCirculo" id="radioCirculo">
    <span id="circulo-radio-error" style="color: red;"></span>
  </div>

  <br>
  <input type="submit" value="Enviar">
</form>
</div>
<script src="script.js"></script>

</body>
</html>