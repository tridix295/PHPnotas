<?php 
//Los constructores es un metodo cuya funcionalidad es dar un valor a las propiedades.
//Es el primer metodo en ejecutarse y se llama automaticamente al crear el object
//Y nunca devuelve datos


class Coche{
    //Las propiedades al ser publicas se pueden acceder desde cualquier lado;
    /*
    *Dentro de la clase actual.
    *Dentro de otra clase que erede la clase actual.
    *Desde afuera de la clase.
    */ 
    public $color;
    public $modelo;

     public function __construct($color,$modelo)
     {
         //Podemos asignarle un valor a las propiedades desde el constructor u obtenerlas por paramentro
         //$this->color = "azul";
         //$this->modelo = "HYUNDAY";
         $this->color = $color;
         $this->modelo = $modelo;
     }
}

$coche1 = new Coche("Verde","AUDI");
var_dump($coche1);
?>