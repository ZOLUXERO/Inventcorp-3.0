<?php

include_once("condb.php");

class Productolis extends conexionprod
{

    public function listar()
    {
        $q = "select * from productos where estado_producto='1' order by codigo_producto";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>