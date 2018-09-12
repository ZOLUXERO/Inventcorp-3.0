<?php
include_once("conexion.php");

class Seguimiento extends Conexion
{
	
        public function listarse()
    {
        $q = "select * from seguimiento where fecha=CURDATE()";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }
    
}



?>