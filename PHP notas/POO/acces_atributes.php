<?php

class Coche{
    //Las propiedades al ser publicas se pueden acceder desde cualquier lado;
    /* PUBLIC:
    *Dentro de la clase actual.
    *Dentro de otra clase que erede la clase actual.
    *Desde afuera de la clase.
    */ 
    public $color;
    
    //PROTECTED
    /*Se pueden acceder desde:
    *Se puede acceder desde las clases que hereden la clase que define la propiedad.
    *Se puede acceder desde la clase que define la propiedad.
    *Unicamente se puede modificar/acceder desde un metodo definido en la clase a la que pertenece la propiedad
    en cuestion
     */  
    protected $modelo;

    private $cilindraje;
     public function __construct($color)
     {
         //Podemos asignarle un valor a las propiedades desde el constructor u obtenerlas por paramentro
         //$this->color = "azul";
         //$this->modelo = "HYUNDAY";
         $this->color = $color;
         $this->modelo = "Clio";
         $this->cilindraje = "500";
     }

     public function getModelo(){
         return $this->modelo;
     }

     public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getCilindraje(){
        return $this->cilindraje;
    }

    public function setCilindraje($cilindraje){
       $this->cilindraje = $cilindraje;
   }
}

$cohe = new Coche($color);

var_dump($cohe->cilindraje);
?>