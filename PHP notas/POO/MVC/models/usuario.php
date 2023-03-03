<?php namespace Usuario;
class Usuario{
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct()
    {
        $this->nombre = "Sebastian";
        $this->apellidos = "Diaz";
        $this->edad = 20;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellidos;
    }
    public function getEdad(){
        return  $this->edad;
    }
}

?>