<?php 
/*
 * programa que compruebe si una variable está vacía y si está vacía
 *rellenarla con texto en minúsculas y mostrarlo en mayúsculas.Y colocarla en negrita.
 */

 $variable2 = null;

 if(empty($variable2)){
    $variable2 = "hola mundo!";
    echo "<strong>".strtoupper($variable2)."</strong>";
 } else {
    echo "<strong>La variable tiene cotenido el cual es:".$variable2."</strong>";
 }

?>