<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleccionar figura geométrica</title>
</head>
<body>

<form action="redireccion.php" method="post">
  <label for="figura">Selecciona una figura geométrica:</label>
  <select name="figura" id="figura">
    <option value="triangulo">Triángulo</option>
    <option value="rectangulo">Rectángulo</option>
    <option value="cuadrado">Cuadrado</option>
    <option value="circulo">Círculo</option>
  </select>
  <br>
  <input type="submit" value="Enviar">
</form>

</body>