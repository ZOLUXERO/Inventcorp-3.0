<?php

class Usuario extends conexion{

	public function registro($usu,$nom1,$nom2,$nom3,$nom4,$ape,$tdo,$numb,$pass)
	{
		//$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
		$q = "insert into usuarios(documento,email_usuario,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,contrasena,telefono,estado_usuario,tipo_documento,id_rol) values('$ape','$usu','$nom1','$nom2','$nom3','$nom4','$pass','$numb',1,'$tdo',3)";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
		
	}
	
}

?>