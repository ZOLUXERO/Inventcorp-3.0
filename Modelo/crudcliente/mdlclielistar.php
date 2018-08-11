<?php
 include_once("condb.php");
class Clientelis extends Conexionclie
{
	
    public function listarclie()
    {
        $q = "select * from listar_clientes_proveedores where estado_proveedor_cliente='1' and id_rol_listar='1' order by codigo_proveedor_cliente";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>