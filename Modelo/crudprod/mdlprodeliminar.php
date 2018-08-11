<?php

 include_once("condb.php");

class Productoeli extends conexionprod
{

    public function eliminar($id)
    {
        $q = "update productos set estado_producto='0' where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>