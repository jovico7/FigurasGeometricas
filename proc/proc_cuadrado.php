<?php
include "../Cuadrado.php"; // Asegúrate de que el nombre del archivo coincida con el nombre de tu clase Cuadrado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del lado del formulario
    $lado = $_POST["lado"];

    // Crear un objeto Cuadrado con el valor proporcionado
    $cuadrado = new Cuadrado($lado);

    // Mostrar resultados
    echo "<h3>Resultados:</h3>";
    echo "Tipo de figura: " . $cuadrado->getTipoFigura() . "<br>";
    echo "Lado: " . $cuadrado->getLado() . "<br>";
    echo "Área: " . $cuadrado->area() . "<br>";
    echo "Perímetro: " . $cuadrado->perimetro() . "<br>";
}
?>