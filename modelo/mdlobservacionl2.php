<?php

 include_once("conexion.php");

class Observl2 extends Conexion
{

    public function listar2()
    {
        $q = "select * from observaciones where fecha_observacion=CURDATE()";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>