<?php

 include_once("conexion.php");

class Usuariol extends Conexion{

    public function logueo($usuario)
	{
        $q = "select * from usuarios where email_usuario='$usuario'";
        $consulta = $this->con->query($q) or die ('Error 1!' .  $this->con->error);
		return $consulta;
    } 
	
}

?>