<?php


include "./figuraGeometrica.php";
class Cuadrado extends FiguraGeometrica implements PerimetroM {
    private $lado;

    public function __construct($lado) {
        parent::__construct("Cuadrado", $lado);
        $this->lado = $lado;
    }

    public function getLado() {
        return $this->lado;
    }

    public function setLado($lado) {
        $this->lado = $lado;
    }

    public function area() {
        return $this->lado * $this->lado;
    }

    public function perimetro() {
        return 4 * $this->lado;
    }

    public function toString() {
        return "Lado: " . $this->getLado() . "<br>" .
               "Área: " . $this->area() . "<br>" .
               "Perímetro: " . $this->perimetro() . "<br>";
    }
}