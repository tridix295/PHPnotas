<?php 
require_once "/home/sebastian/Documentos/htdocs/practicas/POO/MVC/models/acciones.php";

class Notas extends Acciones_user{
    public function getDatos(){
         $nombre = new Acciones_user();
         return $nombre->getDatos();

         require_once "/home/sebastian/Documentos/htdocs/practicas/POO/MVC/views/usuarios/usuario.php";
    }
    public function setUpdate(){}
    public function setDelete(){}
}

?>