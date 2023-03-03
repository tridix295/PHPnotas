<?php namespace Persona;
//Los namespace se podria definir como una especie de paquete, en la que dentro de de ese paquetes tendriamos diferentes clases en donde
//estarian bajo un nombre en conjunto.
//Tambien debe ser la primera linea en ser definida antes de cualquier trozo de codigo, se recomienda nombrar las clases y namespace igual al
//nombre del directorio que lo contiene.
//La ventaja que esto implica es que podemos tener una libreria de clases y la podriamos usar bajo un unico
//nombre que represente ese conjunto
//Por ejemplo si tenemos otra clase con el mismo nombre en otro archivo e incluimos ambas en un mismo archivo
//tendriamos un error, por lo que podriamos hacer uso del namespace
class Persona{
    private $nombre;
    public function __construct()
    {
        $this->nombre = "Sebastian";
    }
}
class Categoria{
    private $categoria;
    public function __construct()
    {
        $this->categoria = "Accion";
    }

    public function getCategoria(){
        return $this->categoria;
    }
}

?>