<?php 
/*
*Funciones pre definidas en los arrays:
*asort -> Ordena alfabeticamente el contenido de un elemento.
*arsort -> Ordena alfabeticamente de manera inversa el contenido de un elemento.
*sort -> Ordena alfabeticamente y numericamente el contenido de un elemento.
*/
$peliculas = array('Superman', 'batman', 'los 3 fantasticos');
asort($peliculas);
var_dump($peliculas);
echo "</br>";

//Añadir elementos a un array.
$peliculas[] = "neto";
array_push($peliculas, "evalanh");
echo "</br>";

//Eliminar un elemento de un array.
//elimina el ultimo elemento del array.
array_pop($peliculas);
unset($peliculas[2]);

//array_rand -> extraer un elemento aleatorio de un array en concreto.
$rand = array_rand($peliculas);
echo $rand;
echo "</br>";

//array_reverse -> Da la vuelta al array
var_dump(array_reverse($peliculas));
echo "</br>";

//Buscar dentro de un array
//array_search("Nombre_elemento", "array"); -> Hace una busqueda del parametro colocado dentro del array
//selecionado.
var_dump(array_search("Superman", $peliculas));
echo "</br>";

//Contar el numero de elementos que hay dentro de un array.
echo count($peliculas);
echo sizeof($peliculas);
?>