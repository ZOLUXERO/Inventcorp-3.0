<?php

 include("condb.php");

class Categoria extends Conexion
{
	
    public function eliminar($id)
    {
        $q = "update categorias set estado_categoria='0' where id_categoria='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
    
}

?>