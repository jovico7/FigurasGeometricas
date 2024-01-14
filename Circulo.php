<?php
include "./figuraGeometrica.php";

class Circulo extends FiguraGeometrica implements PerimetroM {
    private $radio;

    public function __construct($radio) {
        parent::__construct("Circulo", $radio);
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function area() {
        return pi() * $this->radio * $this->radio;
    }
    
    public function perimetro() {
        return 2 * pi() * $this->radio;
    }

    public function toString() {
        return "Tipo de figura: " . $this->getTipoFigura() . "<br>" .
               "Radio: " . $this->getRadio() . "<br>" .
               "Área: " . $this->area() . "<br>" .
               "Perímetro: " . $this->perimetro() . "<br>";
    }
}