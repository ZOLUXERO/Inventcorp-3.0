<?php

 include_once("condb.php");

class Categoriaobt extends Conexioncat
{
	
    public function obtenercat($id)
    {
        $q = "select * from categorias where id_categoria='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
}

?>