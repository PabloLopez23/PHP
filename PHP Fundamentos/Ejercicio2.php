<?php
if ($_POST){
    // recibe el nombre del formulario HTML (METHOD POST)  
    $nombre = $_POST['txtNombre'];
 echo "El nombre es: $nombre";
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina en PHP</title>
</head>
<body>
    <form action="Ejercicio2.php" method="post">
        nombre: 
        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"> 
        <br>
        <input type="submit" value="Enviar">    
</body>
</html>

