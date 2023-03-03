<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/practicas/POO/MVC/models/config/databases.php";

class Model_bass extends Database{
    public $db;
    public function __construct()
    {
        $this->db = self::connect();
    }

    public function conseguirDatos(){
        var_dump($this->db);
    }
}
?>