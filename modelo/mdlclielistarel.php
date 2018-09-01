<?php

 include_once("conexion.php");
 
class Clientelise extends Conexion
{
	
    public function listarclieel()
    {
        $q = "select * from listar_clientes_proveedores where estado_proveedor_cliente='0' order by primer_nombre_provee_clie";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>