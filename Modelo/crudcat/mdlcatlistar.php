<?php

 include_once("condb.php");

class Categorialis extends Conexioncat
{
	
    public function listar()
    {
        $q = "select * from categorias where estado_categoria='1' order by id_categoria";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }
}

?>