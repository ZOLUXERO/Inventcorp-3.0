<?php
include_once("conexion.php");

class Seguimientol2 extends Conexion
{
	
        public function listarse2($fec)
    {
        $q = "select * from seguimiento where fecha='$fec'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }
    
}



?>