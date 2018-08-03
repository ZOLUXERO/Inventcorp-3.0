<?php

class Usuario extends conexion{

    public function logueo($usuario)
	{
        $q = "select * from usuarios where email_usuario='$usuario'";
        $consulta = $this->con->query($q) or die ('Error 1!' .  $this->con->error);
		return $consulta;
    } 
	
}

?>