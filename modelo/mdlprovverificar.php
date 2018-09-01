<?php

 include_once("conexion.php");

class Proveedorv extends Conexion
{

        public function verificarprov($dato)
    {
        $q = "select codigo_proveedor_cliente from listar_clientes_proveedores where codigo_proveedor_cliente='$dato'";
        $consulta = $this->con->query($q) or die ('Error 2!' .  $this->con->error);
        return $consulta;   
    }
    
}

?>