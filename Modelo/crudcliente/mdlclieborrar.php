<?php
 include_once("condb.php");
class Clienteeli extends Conexionclie
{
	
	public function borrar($id)
	{
		$q = "delete from listar_clientes_proveedores where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}

}

?>