<?php

 include_once("conexion.php");

class Productov extends Conexion
{

        public function verificarcod($dato)
    {
        $q = "select codigo_producto from productos where codigo_producto='$dato'";
        $consulta = $this->con->query($q) or die ('Error 2!' .  $this->con->error);
        return $consulta;   
    }
    
}

?>