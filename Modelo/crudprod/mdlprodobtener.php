<?php

 include("condb.php");

class Producto extends conexion
{

    public function obtener($id)
    {
        $q = "select * from productos where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
}

?>