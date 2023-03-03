<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        #tabla,th,td{
            border-radius: 2px;
            border: 2px solid #0016b0;
        }
    </style>
</head>
<body>

    <?php
    ob_start(); 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once "/home/sebastian/Documentos/htdocs/practicas/vendor/autoload.php"; 
    
    require_once "/home/sebastian/Documentos/htdocs/practicas/POO_SQL/views/autoload/autoload.php";

    //Recibimos el nombre del controlador y el nombre de la accion.
    if(isset($_GET["controller"])){
       $name_controller = $_GET["controller"];
        //Iniciamos el controllador
       $controller = new $name_controller();
        
        if(class_exists($name_controller)){
        //Ejecutamos la accion
        if(isset($_GET["accion"]) && method_exists($controller,($_GET["accion"]))){
            $accion_usuario = $_GET["accion"];
            $controller->$accion_usuario();
        }
    }else{
            print "La pagina no existe";
        }
    }else{
        print "La pagina no existe :(";
    }
    ?>
</body>
</html>