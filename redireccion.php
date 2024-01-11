<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura = $_POST["figura"];
    
    switch ($figura) {
        case "triangulo":
            header("Location: ./proc/proc_triangulo.php");
            break;
        case "rectangulo":
            header("Location: ./proc/proc_rectangulo.php");
            break;
        case "cuadrado":
            header("Location: ./proc/proc_cuadrado.php");
            break;
        case "circulo":
            header("Location: ./proc/proc_circulo.php");
            break;
        default:
            // Manejar caso no válido si es necesario
            break;
    }
}
?>