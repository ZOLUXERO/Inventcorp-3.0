<?php

include_once("conexion.php");

class Categoriareg extends Conexion
{
	
	public function registrocat($nom, $des)
    {
        //$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
        $q = "insert into categorias(nombre_categoria, desc_categoria, estado_categoria) values('$nom','$des',1)";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }

}



?>