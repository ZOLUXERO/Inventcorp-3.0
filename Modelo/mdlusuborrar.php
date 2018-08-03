<?php

class Usuario extends conexion{

		public function borrar($id)
	{
		$q = "delete from usuarios where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
}

?>