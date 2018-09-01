<?php

 include_once("conexion.php");

class Seguimientor extends Conexion
{

    public function registrar($usu,$des){
        $q = "insert into seguimiento(usuario, descripcion, fecha) values('$usu','$des',NOW())";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
    }
    
    
}

?>