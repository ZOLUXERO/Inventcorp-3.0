<?php

 include_once("conexion.php");

class Usuariov extends Conexion{

	public function verifica($dato)
	{
		$q = "select * from usuarios where email_usuario='$dato'";
        $consulta = $this->con->query($q) or die ('Error 2!' .  $this->con->error);
		return $consulta;	
	}
	
}

?>