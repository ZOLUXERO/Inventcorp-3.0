<?php

 include_once("conexion.php");

class Stockobt extends Conexion{

 public function obtenerstock($id)
    {
        $q = "select * from stock where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
}

?>