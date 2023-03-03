<?php 
    //Clases astractas: Estas clases no se instancian ni crean objetos, sino que su funcionalidad es
    //ser heredada por una clase hija con su funcionamiento.
    //Las propiedades no son estractas, sino solamente los metodos, y su implementacion no debe
    //ser definida por la misma clase, sino por la clase hija.

/* ------------------------------- Clase padre ------------------------------ */

    abstract class Ordenador{
        public $encendido;

        abstract public function encender();

        public function apagar(){
            $this->encendido = false;
        } 
    }

/* ------------------------------- Clase hija ------------------------------- */
    class PChp extends Ordenador{
        //Definimos el metodo de heredado de la clase hija.
        public function encender()
        {
            $this->encendido = true;
        }
    }

    $PC = new PChp();

    var_dump($PC);
?>