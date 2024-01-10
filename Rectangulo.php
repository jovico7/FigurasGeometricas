<!-- 
Genera la clase Rectangulo que extiende a la clase FiguraGeometrica e implementa a la interfaz perímetro. 
Esta clase tendrá tres atributos, dos heredados de la clase FiguraGeometrica y otro atributo propio llamado lado2. El tipo de figura será rectángulo.
Implementa los métodos getters y setters de cada atributo, codifica el método heredado, implementa el de la interfaz y añade el método toString. -->

<?php
class Rectangulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectángulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado1($lado1) {
        return $this->lado1;
    }

    public function getLado2($lado2) {
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
}