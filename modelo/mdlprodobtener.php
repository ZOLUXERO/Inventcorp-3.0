<?php

include_once("condb.php");

class Productoobt extends conexionprod
{

    public function obtener($id)
    {
        $q = "select * from productos where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
    
}

?>