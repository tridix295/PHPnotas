<?php

use Coche as GlobalCoche;

class Coches{
    //Las propiedades al ser publicas se pueden acceder desde cualquier lado;
    /* PUBLIC:
    *Dentro de la clase actual.
    *Dentro de otra clase que erede la clase actual.
    *Desde afuera de la clase.
    */ 
    private $color;
    
    //PROTECTED
    /*Se pueden acceder desde:
    *Se puede acceder desde las clases que hereden la clase que define la propiedad.
    *Se puede acceder desde la clase que define la propiedad.
    *Unicamente se puede modificar/acceder desde un metodo definido en la clase a la que pertenece la propiedad
    en cuestion
     */  
    protected $modelo;

    private $cilindraje;
     public function __construct()
     {
         //Podemos asignarle un valor a las propiedades desde el constructor u obtenerlas por paramentro
         $this->color = "azul";
         //$this->modelo = "HYUNDAY";
         //$this->color = $color;
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

   //Se recomienda hacer uso de un metodo para mostrar informacion
   /*
   *Ademas en php 7 podemos definir el tipo de datos que estamos recibiendo, es decir que si el valor
   dado no es el esperado saltara a un error */
   public function getInformacion(Coches $object_Coche){
        $informacion = "<h1>Tu informacion es</h1>";
        $informacion .= "<br/>color:".$object_Coche->color;
        $informacion .= "<br/>Modelo:".$object_Coche->modelo;
        $informacion .= "<br/>Cilindraje:".$object_Coche->cilindraje;

        return $informacion;
   }
}

$coche = new Coches();
$coche->setCilindraje("1000");
echo $coche->getInformacion($coche);

?>