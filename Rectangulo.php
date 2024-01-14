<?php
include "./figuraGeometrica.php";

class Rectangulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectángulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function area() {
        return $this->getLado1() * $this->getLado2();
    }

    public function perimetro() {
        return (2 * $this->getLado1()) + (2 * $this->getLado2());
    }

    public function toString() {
        return "Lado 1: " . $this->getLado1() . "<br>" .
               "Lado 2: " . $this->getLado2() . "<br>" .
               "Área: " . $this->area() . "<br>" .
               "Perímetro: " . $this->perimetro() . "<br>";
    }
}