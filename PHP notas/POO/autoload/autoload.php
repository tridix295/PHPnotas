<?php 
//Al tenere clases de diferentes archivos o directorios se hace tedioso cargarla una por una,
//para evitar esto podemo hacer uso de una function la incluya por nosotros.
//el metodo spl_autoload_register busca las clases exixstentes, por lo tanto si el nombre del archivo 
//es diferente al de la clase saldra un error.
function app_autoload($class){
    require_once "/home/sebastian/Documentos/htdocs/practicas/POO/autoload/clases/" . $class .".php";
}

spl_autoload_register("app_autoload");

?>