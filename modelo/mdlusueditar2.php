<?php

include_once("conexion.php");

class Usuarioe2 extends Conexion{

		public function editar2($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$tdo)
	{
		$q = "update usuarios set email_usuario='$ema', primer_nombre='$nom1', segundo_nombre='$nom2', primer_apellido='$nom3', segundo_apellido='$nom4',  telefono='$tel', tipo_documento='$tdo' where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
}

?>