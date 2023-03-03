<?php 
require_once "/home/sebastian/Documentos/htdocs/practicas/POO/MVC/models/model_bass.php";
require_once "/home/sebastian/Documentos/htdocs/practicas/POO/MVC/models/usuario.php";
use Usuario\Usuario;
//Acciones del usuario
class UsuarioControllers{
    //Conseguir informacion
    public function getDatos(){
       //Extraer datos del modelo
       $usuario = new Usuario();
      $nombre = $usuario->getNombre();

       require_once "/home/sebastian/Documentos/htdocs/practicas/POO/MVC/views/usuarios/usuario.php";
    }
    //Actualizar informacion
    public function setDatos(){

    }
    //Eliminar datos
    public function setEliminar(){

    }
}

class ModellControllers{
    public $db;

    public function __construct()
    {
        $this->db = new Model_bass();
    }

    public function conseguirDatos(){
        var_dump($this->db);
    }
}


?>