<?php

 include_once("conexion.php");

class Productolisobycat extends Conexion
{

    public function listarc1()
    {
        $q = "select * from productos where estado_producto='1' order by id_categoria";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>