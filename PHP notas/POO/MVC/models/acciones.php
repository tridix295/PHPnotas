<?php 
//require_once "/home/sebastian/Documentos/htdocs/practicas/POO/MVC/models/interface/accionesInterface.php";
//use Acciones\acciones_base;

class Acciones_user{
     protected function Update(){
        return "Estas eliminando un dato.";
    }
     protected function Delete(){
        return "Estas actualizando un dato.";
    }
    protected function getDatos(){
        return "Estas obtiendo un dato.";
    }
}
?>
