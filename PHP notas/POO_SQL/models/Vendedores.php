<?php
require_once $_SERVER['DOCUMENT_ROOT']."/practicas/POO_SQL/models/DB/conexion.php";
class Vendedores extends Conexion{
    protected function getVendedores(){
        //Nos conectamos a la base de datos.
        parent::connect();
        $sql = "SELECT * FROM Vendedores";

        //Es lo mismo que decir -> query = mysqli_query(con_sql,sql);
       /* $query = $this->connect_db->query($sql);
        if($query){
            return $result = $query;
        }else{
            return $result = "ERROR:".mysqli_error($this->connect_db);
        }*/
        //Consulta usando PDO
        $sentencia = $this->connect_db->prepare($sql);
        $sentencia->execute(array());
        $result = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $result;
    }
}

?>