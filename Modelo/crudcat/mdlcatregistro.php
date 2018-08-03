<?php

 include("condb.php");

class Categoria extends Conexion
{
	
	public function registrocat($cod, $nom, $des)
    {
        //$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
        $q = "insert into categorias(id_categoria, nombre_categoria, desc_categoria, estado_categoria) values('$cod','$nom','$des',1)";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }

}

?>