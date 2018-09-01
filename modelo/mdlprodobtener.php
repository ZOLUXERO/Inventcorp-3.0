<?php

 include_once("conexion.php");

class Productoobt extends Conexion
{

    public function obtener($id)
    {
        $q = "select * from productos where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
    
}

    
    $nom = "";
    $des = "";
    $pen = "";
    $pas = "";
    $fec = "";
    $cat = "";
    $cod = 0;
    $update = false;



?>