<?php

 include_once("conexion.php");

class Productores extends Conexion
{

    public function restaurar($id)
    {
        $q = "update productos set estado_producto='1' where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>