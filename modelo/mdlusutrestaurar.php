<?php

 include_once("conexion.php");

class Usuariores extends Conexion
{

    public function restaurar($id)
    {
        $q = "update usuarios set estado_usuario='1' where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>