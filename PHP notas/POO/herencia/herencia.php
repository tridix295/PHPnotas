<?php

//Herencia: Brinda la posibilidad de compartir propiedades/atributos y metodos entre clases.
class Personas{
    protected $nombres;
    protected $apellidos;
    public $edad;

    //constructor
    public function __construct()
    {
        $this->nombres = "Benito";
        $this->apellidos = "Perez";
        $this->edad = "10";   
    }
    //getter
    public function getNombre()
    {
        return $this->nombres;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getEdad()
    {   
        return  $this->edad;
    }
    
    //setter
    public function setNombre($nombre)
    {
        $this->nombres = $nombre;
    }
    public function setApellido()
    {
        $this->apellidos;
    }
    public function setEdad()
    {
        $this->edad;
    }
    
    //acciones
    public function Caminar()
    {
        return "Estoy caminando";
    }
    public function Correr()
    {
        return "Estoy corriendo";
    }
    public function Hablar()
    {
        return "Estoy hablando";
    }
    
}

//Para que una clase herede otra clase debemos colocar el 'extend' y el nombre de la clase que se esta herendando
//Igualmente y esa clase esta herando otra tambien se esta herando.
class Informatico extends Personas{
    
    public function programar(){
        return "Soy un un programador";
    }
    public function repararPC(){
        return "Reparo PC'S";
    }

    public function hacerOfimatica(){
        return "Estoy escribiendo en WORD";
    }
}

$informatico = new Informatico();
$informatico->setNombre("Sebastian");
echo $informatico->hablar()."<br/>";
echo "<br/>".$informatico->programar();

?>