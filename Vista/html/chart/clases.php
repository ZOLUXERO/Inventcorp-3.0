<?php

 include("conexion.php");

class clases extends conexion
{
    

    public function listar()
    {
        $query = "SELECT * FROM stock ORDER BY fecha ASC";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

  
  
}

?>
