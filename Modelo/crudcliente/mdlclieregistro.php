<?php

class Cliente extends conexion
{
	
	public function registroclie($codclie,$nomclie,$nom2clie,$nomclie3,$nom4clie,$emaclie,$telclie)
	{
		//$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
		$q = "insert into listar_clientes_proveedores(codigo_proveedor_cliente,primer_nombre_provee_clie,segundo_nombre_provee_clie,primer_apellido_provee_clie,segundo_apellido_provee_clie,email_proveedor_cliente,telefono_proveedor_cliente,estado_proveedor_cliente,id_rol_listar) values('$codclie','$nom1clie','$nom2clie','$nom3clie','$nom4clie','$emaclie','$telclie',1,2)";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
		
	}

}

?>