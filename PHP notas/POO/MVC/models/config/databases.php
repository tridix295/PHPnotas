<?php
class Database{
    private $user    = "root";
    private $host    = "local host";
    private $pass    = "root123";
    private $db      = "notas";
    private $puerto  = 3306;

    public function __construct()
    {
        $result = new mysqli(
            $this->host.','.$this->user.','.$this->pass.','.$this->db.','.$this->puerto
        );
    }

    public static function connect(){
        //return $result;
    }
}

?>