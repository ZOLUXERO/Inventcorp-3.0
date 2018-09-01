<?php

include_once("conexion.php");

class Usuariob extends Conexion{

		public function borrar($id)
	{
		$q = "update usuarios set estado_usuario='0' where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
}

?>