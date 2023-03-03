<?php 
/**
 * Para evitar tener que cargar un controllador cada vez que agregamos uno nuevo lo podemos automatizar
 * con el auto load
 */
function Autocargado($class_name){
    include $_SERVER['DOCUMENT_ROOT']."/practicas/POO/MVC/controllers/".$class_name.".php";
    return $class_name;

  
}

//spl_autoload_register("Autocargado");
?>