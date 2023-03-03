<?php 
 //En todos los ficheros donde estara activa la sesion se debe iniciar para poder aceder a los datos
 //del mismo. Al ser una variable super global, se puede acceder al contenido asi se haya declarado
 //en otro fichero. Dichos datos se almacenan en el servidor y no en el cliente.
 session_start();


 if(array_key_exists('variable_persistente',$_SESSION) && !empty($_SESSION['variable_persistente'])){
     echo "Estas logeado :)";
    var_dump($_SESSION);

 } else{
    session_destroy();
    header("Location: /sesiones.php");
 }
?>
