<?php

 include_once("conexion.php");

class Proveedorobt extends Conexion
{
	
  	public function obtenerprov($id)
    {
        $q = "select * from listar_clientes_proveedores where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

    $nom1prov = "";
    $nom2prov = "";
    $nom3prov = "";
    $nom4prov = "";       
    $emaprov = "";
    $telprov = "";
    $codprov = 0;
    $update = false;


?>