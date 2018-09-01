<?php

 include_once("conexion.php");
 
class Clienteeli extends Conexion
{
	
	public function borrar($id)
	{
		$q = "update listar_clientes_proveedores set estado_proveedor_cliente='0' where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}

}

?>