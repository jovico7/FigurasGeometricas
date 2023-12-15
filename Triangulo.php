<!-- 
Genera la clase Triangulo que extiende a la clase FiguraGeometrica e implementa a la interfaz perímetro. 
Esta clase tendrá tres atributos, dos heredados de la clase FiguraGeometrica y otro atributo propio llamado lado2. El tipo de figura será  triángulo.
Implementa los métodos getters y setters de cada atributo, codifica el método heredado e implementa el de la interfaz. -->

<?php
class Triangulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Triángulo", $lado1);
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) { 
        $this->lado2 = $lado2;
    }

    public function area() {

    }
    
    public function perimetro() {

    }
}