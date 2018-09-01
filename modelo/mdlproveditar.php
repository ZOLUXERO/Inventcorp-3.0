<?php
 include_once("condb.php");
class Proveedoract extends Conexionprov
{
	
	   public function actualizarprov($codprov, $nom1prov, $nom2prov, $nom3prov, $nom4prov, $emaprov, $telprov)
    {
        $q = "update listar_clientes_proveedores set primer_nombre_provee_clie='$nom1prov', segundo_nombre_provee_clie='$nom2prov', primer_apellido_provee_clie='$nom3prov', segundo_apellido_provee_clie='$nom4prov', email_proveedor_cliente='$emaprov', telefono_proveedor_cliente='$telprov' where codigo_proveedor_cliente='$codprov'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>