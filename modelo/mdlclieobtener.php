<?php

 include_once("conexion.php");

class Clienteobt extends Conexion
{
	
  	public function obtenerclie($id)
    {
        $q = "select * from listar_clientes_proveedores where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

    
    $nom1clie = "";
    $nom2clie = "";
    $nom3clie = "";
    $nom4clie = "";       
    $emaclie = "";
    $telclie = "";
    $codclie = 0;
    $update = false;


?>