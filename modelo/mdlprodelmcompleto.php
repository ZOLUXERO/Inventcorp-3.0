<?php

 include_once("conexion.php");

class Productoec extends Conexion
{

		public function eliminarc($cod)
	{
		$q = "delete from productos where codigo_producto='$cod'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}

}

?>