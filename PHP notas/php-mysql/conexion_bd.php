<?php
$servidor = '127.0.0.1';
$bd = 'concesionario';
$nombre = 'root';
$contraseña = 'root123';
$puerto = '3306';

//Primero se realiza la conexion a la base de datos, en el que recibe los parametros del servidor,usuario,pass,bd y el puerto
//este ultimo puede ser opcional.
$conexion = mysqli_connect($servidor, $nombre, $contraseña, $bd, $puerto);

if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
} else {
    echo "Todo correcto";
    mysqli_query($conexion, "SET NAMES 'utf8'");
}

//Consultas

$query = mysqli_query($conexion, "SELECT * FROM Coches");

while ($consulta = mysqli_fetch_assoc($query)) {
    echo "</br>" . $consulta['modelo'];
}
