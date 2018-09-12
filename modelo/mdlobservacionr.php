<?php

 include_once("conexion.php");

class Observr extends Conexion
{

    public function registro($doc, $des)
    {

        $q = "insert into observaciones(usuario_observacion, desc_obeservacion, fecha_observacion) values('$doc','$des',NOW())";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }

}

?>