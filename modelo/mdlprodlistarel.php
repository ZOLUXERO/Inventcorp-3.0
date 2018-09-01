<?php

 include_once("conexion.php");
 
class Productoel extends Conexion
{
	
    public function listarel()
    {
        $q = "select * from productos where estado_producto='0' order by codigo_producto";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>