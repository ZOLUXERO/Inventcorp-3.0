<?php

 include_once("conexion.php");

class Productolisp1 extends Conexion
{

    public function listarc1($var)
    {
        $q = "select * from productos where (codigo_producto LIKE '%$var%' OR nombre_producto LIKE '%$var%') and estado_producto='1' order by id_categoria";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>