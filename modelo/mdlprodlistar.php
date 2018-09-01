<?php

 include_once("conexion.php");

class Productolis extends Conexion
{

    public function listar()
    {
        $q = "select * from productos where estado_producto='1' order by codigo_producto";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>