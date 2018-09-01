<?php

include_once("conexion.php");

class Categorialis extends Conexion
{
	
    public function listar()
    {
        $q = "select * from categorias where estado_categoria='1' order by id_categoria";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }
}


?>