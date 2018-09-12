<?php

 include_once("conexion.php");

class Observl extends Conexion
{

    public function listar($doc)
    {
        $q = "select id_observacion,fecha_observacion,desc_obeservacion from observaciones where usuario_observacion='$doc'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>