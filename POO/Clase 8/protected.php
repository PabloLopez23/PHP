<?php

class Ejemplo {
    protected $atributo = "Soy protegido";
    
    protected function mostrarAtributo() {
        echo $this->atributo;
    }
}
