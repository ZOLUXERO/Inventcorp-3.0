<?php

 include_once("conexion.php");

class Proveedorreg extends Conexion
{
	
	public function registroprov($codprov,$nom1prov,$nom2prov,$nom3prov,$nom4prov,$emaprov,$telprov)
	{
		//$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
		$q = "insert into listar_clientes_proveedores(codigo_proveedor_cliente,primer_nombre_provee_clie,segundo_nombre_provee_clie,primer_apellido_provee_clie,segundo_apellido_provee_clie,email_proveedor_cliente,telefono_proveedor_cliente,estado_proveedor_cliente,id_rol_listar) values('$codprov','$nom1prov','$nom2prov','$nom3prov','$nom4prov','$emaprov','$telprov',1,2)";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
		
	}

}

?>