<?php


// DATOS DE CONEXION A LA BASE DE DATOS
// ACTUALIZACION 1: Vamos a hacer una funcion que agrupe toda la parte de la funcion. En donde la variable 'basededatos'
// La vamos a cambiar por el parametro de la funcion

function conexionMysql($bd) {


$servidor = 'localhost';
$usuario = 'root';
$password = '';
// ANTES: $basededatos = 'pruebaBD';
$basededatos = $bd;

// CONEXION A LA BASE DE DATOS ATRAVEZ DEL SISTEMA DE MYSQLI

// VAMOS A CREAR EL OBJETO 'CONEXION'. Esta clase ya esta creada dentro de PHP, es new mysql, donde dentro de ella va agrupar los datos de conexion
// mysqli_connect ya no existe. NO USAR!!

$conexion = new mysqli($servidor, $usuario, $password, $basededatos);

// COMPROBACION SI LA CONEXION ES CORRECTA
// HACEMOS UN CONDICIONAL DONDE $conexion TIENE UN METODO DE conenect_error, DONDE LE DIREMOS SI LA COSA VA MAL QUE NOS DIGA CONEXION FALLIDA Y QUE NO ESPECIFIQUE QUE TIPO DE ERROR

if($conexion->connect_error) {

    die('Conexion Fallida' . $conexion->connect_error);

}

$resultados = $conexion->query('select * from clientes');

// CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].

echo('<pre>');
print_r($resultados);
echo('</pre>');

foreach($resultados AS $valor) {

    echo $valor['id'] . ' - ';
    echo $valor['nombre'] . ' - ';
    echo $valor['apellidos'] . ' - ';
    echo $valor['movil'] . '<br>';
    
}

}

// ACTUALIZACION 2: PONEMOS TODO EL TEMA DE PONER DATOS Y PETICIONES EN COMENTARIOS. PORQUE EN EL INDEX SOLO QUEREMOS LLAMAR A LA BASE DE DATOS CON LA FUNCION. pero si queremos usar estas lineas de codigo, es simplemente meter el contenido dentro de la funcion para que en el index como solo llamamos a la funcion pues nos ejecute lo que hay dentro de la funcion.

// //  MOSTRAR DATOS DE LA TABLA QUE CREAMOS EN MYPHPADMIN

// // RESULTADOS: VA A SER LA VARIABLE QUIE NOS SACARA LOS DATOS. COMO CONEXION ES UN OBJETO PODEMOS PEDIRLE COSAS
// // UNA DE LAS OPCIONES MAS UTILIZADAS ES USAR EL METODO 'QUERY' QUE NOS PERMITE DARLE ORDENES A LA BASE DE DATOS CON SELECT

// $resultados = $conexion->query('select * from clientes');

// // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].

// echo('<pre>');
// print_r($resultados);
// echo('</pre>');

// foreach($resultados AS $valor) {

//     echo $valor['id'] . ' - ';
//     echo $valor['nombre'] . ' - ';
//     echo $valor['apellidos'] . ' - ';
//     echo $valor['movil'] . '<br>';
    
// }

// // INSERTAR NUEVAS TUPLAS
// // DENTRO DEL QUERY VAMOS A PONER INSERT INTO, OBVIAMENTE. RECORDEMOS DENTRO DEL QUERY ES DONDE LE DAMOS PETICIONES

// $insertar = $conexion->query(' 
// INSERT INTO clientes (nombre, apellidos, movil) VALUE ("golum", "eldetupadre", 643432434)
// ');

// // AHORA CUANDO REFRESQUEMOS, NOS LO MOSTRARA LA TUPLA CREADA, PARA DESPUES DARLE REFRESCAR EN MYPHPADMIN PARA QUE NOS APAREZCA.