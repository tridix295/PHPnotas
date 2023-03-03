<?php 
//Estatico: Permite acceder a propiedades y metodos de manera mas rapida y senecilla sin necesidad de crear una instancia
//Al intentar acceder una propiedad estatica no se debe hacer a traves del 'this'
//Sino que se debe acceder de la siguiente manera => self::propiedad.

class ConfigStatic{
    public static $color;
    public static $entorno;

    public function getColor()
    {
        return self::$color;
    }
    public function getEntorno()
    {
        return self::$entorno;
    }

/* --------------------------------- setter --------------------------------- */
    public static function setColor($color)
    {
        self::$color = $color;
    }
    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
}

//Para acceder desde afuera a la propiedad primero declaramos la clase que se va a usar, seguido de los
//dos puntos -> :: -> y seguido de la propiedad o metodo.
ConfigStatic::setColor("azul");
ConfigStatic::setEntorno("localhost");

echo ConfigStatic::$color;
ConfigStatic::setColor("rojo");
echo ConfigStatic::$color;
?>