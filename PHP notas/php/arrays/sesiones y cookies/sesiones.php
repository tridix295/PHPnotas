<?php 
/**
 * Las sessiones sirven para almacenar y persistir datos del usuario mientras navegue por la web hasta
 * que cierrie el navegador o cierre sesion o borre las cookies.
 */

 // Se debe iniciar primero la session
 session_start();

 //Una variable normal
 $text = "Hola, soy un texto";

 //$_SESSION -> Es un variable super global de tipo array asociativo.
 $_SESSION["variable_persistente"]="Hola :)... la sesion 1 esta activa.";
 $_SESSION["variable_persistente2"]="Hola :)... la sesion 2 esta activa.";
 session_destroy();

?>
 <a href="/practicas/arrays/sesiones y cookies/pagina1.php">Ir a otra pagina</a