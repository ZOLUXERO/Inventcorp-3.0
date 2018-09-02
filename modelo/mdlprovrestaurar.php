<?php

 include_once("conexion.php");

class Proveedorres extends Conexion
{

    public function restaurar($id)
    {
        $q = "update listar_clientes_proveedores set estado_proveedor_cliente='1' where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>