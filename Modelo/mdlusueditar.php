<?php

include_once("conexion.php");

class Usuarioe extends Conexion{

		public function editar($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$est,$rol)
	{
		$q = "update usuarios set email_usuario='$ema', primer_nombre='$nom1', segundo_nombre='$nom2', primer_apellido='$nom3', segundo_apellido='$nom4',  telefono='$tel', estado_usuario='$est', id_rol='$rol' where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
			public function editarcontrasena($ema,$pass34)
	{
		$q = "update usuarios set contrasena='$pass34' where email_usuario='$ema'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
}

?>