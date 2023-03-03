<?php
/*
*Un array es un conjunto de datos/valores bajo un mismo nombre unico. Para acceder a estos valores 
 se debe hacer mendiante un indice numero o alfa numerico.
*Sintaxis: $nombre = array('valor1', 'valor2', 'valor3', 'valor4');
*/

$peliculas = array('Superman', 'batman', 'los 3 fantasticos');
$juegos = ['COD', 'Super Mario', 'PES'];

echo "<pre>";
var_dump($peliculas);
echo "</pre>";

//var_dump($juegos);
//Para tomar algun dato en especifio del array
echo "<pre>";
var_dump($peliculas['1']);
echo "</pre>";

//Recorrer un array con for
for($i = 0; $i <= count($juegos); $i++){
    echo $juegos["$i"];
}
echo "</br>";

//recorrer un array con for each.
foreach ($peliculas as $peliculas){
    echo $peliculas;
}
echo "</br>";

//Arrays asociativos
$personas = array (
    'nombre' => 'Sebastian',
    'apellidos' => 'Diaz Polo',
    'edad' => '19'
);
echo $personas['apellidos'];
echo "</br>";

//Los parametros pasados a traves de la url tambien son asociativos.
/*
url:http://localhost/practicas/arrays/arrays.php?hola=1$nombre=david
var_dump($_GET);

*Muestra los elementos hola => 1 y nombre => david... adicionalmente su tipo de dato es string.
*/
?>