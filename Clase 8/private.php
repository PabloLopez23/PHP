<?php 

class Ejemplo {
    private $atributo = "Soy privado";

    public function mostrarAtributo() {
        echo $this->atributo; // Acceso permitido porque está dentro de la clase
    }
}

$obj = new Ejemplo();
// echo $obj->atributo; // Esto generará un error
