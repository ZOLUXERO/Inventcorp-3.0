<?php

 include_once("conexion.php");

class Clienteec extends Conexion
{

		public function eliminarc($cod)
	{
		$q = "delete from listar_clientes_proveedores where codigo_proveedor_cliente='$cod'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}

}

?>