<?php

 include_once("conexion.php");

class Usuariol2 extends Conexion{

    public function logueo2($usuario)
	{
        $q = "select estado_usuario from usuarios where email_usuario='$usuario'";
        $consulta = $this->con->query($q) or die ('Error 1!' .  $this->con->error);
		return $consulta;
    } 
	
}

?>