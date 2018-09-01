<?php

include_once("conexion.php");

class Categoriaobt extends Conexion
{
	
    public function obtenercat($id)
    {
        $q = "select * from categorias where id_categoria='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
}

    $nom = "";
    $des = "";
    $cod = 0;
    $update = false;



?>