<?php

 include_once("conexion.php");
 
class Proveedorese extends Conexion
{
	
    public function listarel()
    {
        $q = "select * from listar_clientes_proveedores where estado_proveedor_cliente='0' and id_rol_listar='2' order by primer_nombre_provee_clie";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>