<?php

 include("conexion.php");

class Usuario extends conexion{

	public function listarusuarios()
	{
		$q = "select * from usuarios order by primer_nombre";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);		
		return $consulta;	
	}
	
}

?>