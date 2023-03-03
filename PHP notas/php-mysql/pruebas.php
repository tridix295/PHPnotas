<?php
$text= "               hola mundo asi soy                ";
var_dump($text);
$text = str_replace(" ","",$text);
var_dump($text);
/*
//Primero se realiza la conexion a la base de datos, en el que recibe los parametros del servidor,usuario,pass,bd y el puerto
//este ultimo puede ser opcional.
function db(){
$servidor = '127.0.0.1';
$bd = 'concesionario';
$nombre = 'root';
$contraseña = 'root123';
$puerto = '3306';
$conexion = mysqli_connect($servidor, $nombre, $contraseña, $bd, $puerto);

    return $conexion;

}
$conexion = db();
$n1 = "dfd";
$n2 = "dfd";
function insertar($conexion,$n1,$n2){
    $sql= "INSERT INTO Grupos VALUES ( null,'$n1','$n2')";
    $guardar = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

    if($guardar){
        $estado_db = "bien";
    }else{
        $estado_db = "mal";
    }

    return $estado_db;
}
$estado_db = insertar($conexion,$n1,$n2);

echo $estado_db;
?>*/
?>