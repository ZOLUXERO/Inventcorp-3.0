<?php

 include_once("conexion.php");

class Stocklis extends conexionstock{

	 public function listarstock($id)
	{
        $q = "SELECT sum(cantidad_ingreso-cantidad_salida) as total FROM stock WHERE codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('Error 1!' .  $this->con->error);
		return $consulta;
    } 
	
}

?>