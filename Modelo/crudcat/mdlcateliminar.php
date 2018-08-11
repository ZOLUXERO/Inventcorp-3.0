<?php

 include_once("condb.php");

class Categoriaeli extends Conexioncat
{
	
    public function eliminar($id)
    {
        $q = "update categorias set estado_categoria='0' where id_categoria='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
    
}

?>