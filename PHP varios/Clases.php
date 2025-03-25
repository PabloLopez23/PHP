<?php
class Casa {
    // Propiedades
    public $anchura = 10;
    public $longitud = 5;

    // Métodos
    public function __construct ( $a , $l ) {
        $this->anchura = $a; 
        $this->longitud = $l;
    }

    public function area() {
        return $this->anchura * $this->longitud;
    }
}
?>
