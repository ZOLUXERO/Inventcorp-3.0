<?php

class Cliente extends conexion
{
	
  	public function obtenerclie($id)
    {
        $q = "select * from listar_clientes_proveedores where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>