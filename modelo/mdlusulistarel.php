<?php

 include_once("conexion.php");
 
class Usuarioel extends Conexion
{
	
    public function listarel()
    {
        $q = "select * from usuarios where estado_usuario='0' order by primer_nombre";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

}

?>