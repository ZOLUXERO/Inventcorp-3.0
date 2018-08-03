<?php

class Cliente extends conexion
{
	
	   public function actualizarclie($codclie, $nom1clie, $nom2clie, $nom3clie, $nom4clie, $emaclie, $telclie)
    {
        $q = "update listar_clientes_proveedores set primer_nombre_provee_clie='$nom1clie', segundo_nombre_provee_clie='$nom2clie', primer_apellido_provee_clie='$nom3clie', segundo_apellido_provee_clie='$nom4clie', email_proveedor_cliente='$emaclie', telefono_proveedor_cliente='telclie' where codigo_proveedor_cliente='$codclie'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>