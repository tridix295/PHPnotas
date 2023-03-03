<?php 
function app_autoloader($class_name){
    include "/home/sebastian/Documentos/htdocs/practicas/POO_SQL/controllers/".$class_name.".php";
}
spl_autoload_register("app_autoloader");
?>