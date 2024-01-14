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
                echo "<h3>Resultados:</h3>";
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
                echo "<h3>Resultados:</h3>";
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
            echo "<h3>Resultados:</h3>";
            echo $cuadrado->toString();
            echo "<a href='./index.php'>Volver atrás</a>";
            break;
        case "circulo":
            include "./Circulo.php";
            $radioCirculo = $_POST['radioCirculo'];

            $circulo = new Circulo($radioCirculo);

            echo "<h3>Resultados:</h3>";
            echo $circulo->toString();
            echo "<a href='./index.php'>Volver atrás</a>";
            break;
        default:
            // Manejar caso no válido si es necesario
            break;
    }
}
?>