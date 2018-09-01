<?php

 include_once("conexion.php");
 
class Clienteeli extends Conexion
{
	
	public function borrar($id)
	{
		$q = "delete from listar_clientes_proveedores where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}

}

?>