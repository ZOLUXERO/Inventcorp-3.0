<?php

 include_once("conexion.php");

class Usuariosi extends Conexion
{

		public function borrars($usu)
	{
		$q = "delete from usuarios where documento='$usu'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}

}

?>