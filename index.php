<?php
require_once 'php/conexion.php';

if((isset($_POST['nombre'])) && (isset($_POST['apellidos'])) && (isset($_POST['movil']))) {
conexionMysql('pruebabd');

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">

<section>
<div>

<!-- nombre -->

<label for="nombre">
Nombre
</label>

<input type="text" name="nombre">

<!-- apellidos -->

<label for="nombre">
Apellidos
</label>

<input type="text" name="apellidos">

<!-- movil -->

<label for="number">
Movil
</label>

<input type="text" name="movil">
</div>

<!-- boton para enviar a una nueva tupla -->

<button type="submit">
AÑADIR TUPLA
</button>


</section>


</form>
    
</body>
</html>