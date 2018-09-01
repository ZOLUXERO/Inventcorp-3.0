<?php

 include_once("conexion.php");

class Usuario extends Conexion
{

	public function listarusuarios()
	{
		$q = "select * from usuarios order by primer_nombre";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);		
		return $consulta;	
	}
	
}

?>