<?php

include_once("conexion.php");

class Usuarioo extends Conexion{

		public function obtenerusuarios($id)
	{
		$q = "select * from usuarios where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}

}

?>