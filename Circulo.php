<?php
include "./figuraGeometrica.php";

class Circulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($lado1) {
        parent::__construct("Circulo", $lado1);
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
        return $this->getLado1() + $this->getLado2() + $this->getLado1() + $this->getLado2();
    }
}