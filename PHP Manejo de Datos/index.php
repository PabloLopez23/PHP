<?php

echo 'un texto de una linea
varias lineas
comillas simples \' backslash \\ continuar con mas texto    
$variable <br>';

$name = 'Sergio';
echo "Mi nombre es $name <br>"; 

$courses = [
    'backend' => ['PHP', 'Laravel'],
    'frontend' => ['JavaScript', 'Vue.js']
]; 

// echo "courses de Programacion:{$courses['frontend'][1]} <br>";
/*
class User {
    public $name = 'Hernan';
}

$user = new  User;
echo "$user->name quiere aprender mas de {$courses['backend'][0]}";
*/

$teacher = 'Adrian';
$Adrian = 'Profesor de PHP';
echo "<br>$teacher es ${$teacher}"; // Profesor de PHP
 

function getTeacher() {
    return 'teacher';
}

$teacher = 'Andrea';
$Andrea = 'Profesora de javascript';


?>
