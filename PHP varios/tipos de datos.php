<?php
//TIPOS DE DATOS
//numericos enteros
$positivio = 10;
$cero = 0;
$negativo = -10;

//numericos decimales PUNTO FLOTANTE (FLAOT REAL DOUBLE)
$numero = 3.1416;
$exponente_1 = 1.2e3; //1200 10^3
$exponente_2 = 7e-10; //0.0000000007 10^-10

//cadenas de texto
$nombre = "Pablo"; //comillas dobles
$apellido = 'Perez'; //comillas simples
var_dump("mi nombre es $nombre $apellido");
var_dump2('mi nombre es $nombre $apellido');

//escapada de caracteres
$mensaje = "mi nombre es (barra invertida) $nombre $apellido";


// VARIBLES
$name = "Pablo";
$_age = 41;

//CONSTANTES no se pueden cambiar

define('NAMBRE', "Andrea");
define('AGE', 30);

// FUNCIONES

function nombre_de_la_funcion($parametro1, $parametro2){
  // codigo a ejecutar
}


function que_dia_es_hoy(){
    echo "Hoy es " . date('l');
};


function suma($num1, $num2){
  return $num1 + $num2;
}

echo suma(5, 10);

?>
