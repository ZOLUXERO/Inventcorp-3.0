<?php

 include_once("conexion.php");

class Observl extends Conexion
{

    public function listar($doc)
    {
        $q = "select * from observaciones where usuario_observacion='$doc'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

        public function listarr($fec)
    {
        $q = "select * from observaciones where fecha_observacion='$fec'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>