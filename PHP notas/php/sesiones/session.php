<?php 
session_start();
$n = array(
    "nombre" => "sebas",
    "apellido" => "diaz"
);

$_SESSION["usuario"] = $n;
$_SESSION["estado"]["ok"]="enrabuena";
?>
<a href="/practicas/php/sesiones/pg2.php">Ir</a>