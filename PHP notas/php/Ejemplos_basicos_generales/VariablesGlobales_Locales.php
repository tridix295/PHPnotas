<?php 

/*
*Variables Globales : Las variables locales son las que estaran disponibles dentro y fuera de una funcion.

*Variables Locales: Se declaran dentro de una funcion y solo pueden ser llamadas dentro de esa funcion.
   *Una opcion puede ser hacer un return de la variable que se desea utilizar afuera de la funcion.
*/

$frase = "Mejora cada dia¡¡ :)";

function Muestrame(){

   // echo $yup = "Tengo hambre";
    global $frase ;
    echo $frase;
}

Muestrame();

//No la va a mostrar porque es una variable local
echo $yup;
?>