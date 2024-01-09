<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura = $_POST["figura"];
    
    switch ($figura) {
        case "triangulo":
            header("Location: ./Triangulo.php");
            break;
        case "rectangulo":
            header("Location: ./Rectangulo.php");
            break;
        case "cuadrado":
            header("Location: cuadrado.php");
            break;
        case "circulo":
            header("Location: circulo.php");
            break;
        default:
            // Manejar caso no válido si es necesario
            break;
    }
}
?>