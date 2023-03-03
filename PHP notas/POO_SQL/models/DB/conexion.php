<?php


require_once $_SERVER['DOCUMENT_ROOT']."/practicas/POO_SQL/models/Config/config.php";

class Conexion{
    protected $connect_db;

    public function connect()
    {
        //Conexion usando PDO
        try{
            $this->connect_db = new PDO('mysql:host=127.0.0.1;,port=3306;dbname=concesionario','root','root123');
            $this->connect_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connect_db->exec("SET CHARACTER SET utf8");
            return $this->connect_db;
        }catch(Exception $e){
            print "ERROR: ".$e."...En la linea =>".$e->getLine();
        }
       /* $this->connect_db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME,DB_PORT);
        if($this->connect_db->connect_errno){
            echo "Erro al conectar a la bd: ".$this->connect_db->connect_error;
            return;
        }

        //Setear caracteres.
        $this->connect_db->set_charset(DB_CHARSET);*/
    }
}

?>