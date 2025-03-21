<?php

//$nombre = "Juan";
//$apellido = "Perez";

// echo $nombre . " " . $apellido;

function concatenar($nombre, $apellido) {
    echo $nombre . " " . $apellido;
}

concatenar("Andrea", "Pardo");


$numeros = array (1, 2, 3, 4);

function sumarNumeros ($numeros) {
    $suma = 0;
        for ($i=0; $i<4 ;$i++) {
            $suma = $suma + $numeros[$i];
        }
        echo " LA SUMA DE LOS VALORES DEL ARRAY ES: " . $suma;
}

sumarNumeros($numeros);

?>