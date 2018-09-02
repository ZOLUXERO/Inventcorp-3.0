<?php

 include_once("conexion.php");

class Usuariov2 extends Conexion{

	public function verifica2($dato)
	{
		$q = "select * from usuarios where documento='$dato'";
        $consulta = $this->con->query($q) or die ('Error 2!' .  $this->con->error);
		return $consulta;	
	}
	
}

?>