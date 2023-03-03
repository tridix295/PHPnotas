<?php 

/*
*Una opcion para llamar una funcion puede ser agregar el nombre de la funcion a una variable y ejecutarla
*Tambien se puede concatenar el nombre de la funcion en una variable y ejecutarla.
*/
function HolaMundo(){
    return "Hola Mundo :)";
}

function ComoEstas(){
    return "Como estas? :)";
}
$mos1 = "Mundo";
$mostrar = "Hola".$mos1;

echo $mostrar();
?>