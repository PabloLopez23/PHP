<?php
// Definimos una clase llamada Coche
class Coche {
    // Propiedades (atributos)
    public $marca;
    public $color;

    // Constructor para inicializar las propiedades
    public function __construct($marca, $color) {
        $this->marca = $marca;
        $this->color = $color;
    }

    // Método para mostrar detalles del coche
    public function mostrarDetalles() {
        return "Este coche es un $this->color $this->marca.";
    }
}

// Crear un objeto (instancia) de la clase Coche
$coche1 = new Coche("Toyota", "rojo");

// Crear otro objeto (instancia) de la clase Coche
$coche2 = new Coche("Honda", "azul");

// Mostrar los detalles de los coches
echo $coche1->mostrarDetalles(); // Salida: Este coche es un rojo Toyota.
echo "\n";
echo $coche2->mostrarDetalles(); // Salida: Este coche es un azul Honda.
?>
