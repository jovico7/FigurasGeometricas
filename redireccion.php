<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Agrega este enlace al CDN de SweetAlert2 después del enlace de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $figura = $_POST["figura"];

            switch ($figura) {
                case "triangulo":
                    include "./Triangulo.php";
                    $baseTriangulo = $_POST['baseTriangulo'];
                    $alturaTriangulo = $_POST['alturaTriangulo'];
                    
                    $triangulo = new Triangulo($baseTriangulo, $alturaTriangulo);

                    // Imprime los resultados utilizando el método toString
                    echo "<h3>Resultados del Triángulo:</h3>";
                    echo $triangulo->toString();
                    echo "<a href='./index.php'>Volver atrás</a>";
                    break;
                case "rectangulo":
                    include "./Rectangulo.php";
                    $lado1Rectangulo = $_POST['lado1Rectangulo'];
                    $lado2Rectangulo = $_POST['lado2Rectangulo'];

                        // Crea un objeto Cuadrado con el valor del lado recuperado
                        $rectangulo = new Rectangulo($lado1Rectangulo, $lado2Rectangulo);

                        // Imprime los resultados utilizando el método toString
                        echo "<h3>Resultados del Rectángulo:</h3>";
                        echo $rectangulo->toString();
                        echo "<a href='./index.php'>Volver atrás</a>";
                    break;
                case "cuadrado":
                    include "./Cuadrado.php";
                    // Recupera el valor del lado del cuadrado enviado por el formulario
                    $ladoCuadrado = $_POST["ladoCuadrado"];

                    // Crea un objeto Cuadrado con el valor del lado recuperado
                    $cuadrado = new Cuadrado($ladoCuadrado);

                    // Imprime los resultados utilizando el método toString
                    echo "<h3>Resultados del Cuadrado:</h3>";
                    echo $cuadrado->toString();
                    echo "<a href='./index.php'>Volver atrás</a>";
                    break;
                case "circulo":
                    include "./Circulo.php";
                    $radioCirculo = $_POST['radioCirculo'];

                    $circulo = new Circulo($radioCirculo);

                    echo "<h3>Resultados del Círculo:</h3>";
                    echo $circulo->toString();
                    echo "<a href='./index.php'>Volver atrás</a>";
                    break;
                default:
                    // Manejar caso no válido si es necesario
                    break;
            }
        }
        ?>
    </div>
</body>
</html>