<?php

include_once("conexion.php");

class Stockr extends Conexion
{
	
	public function registro($cod, $ent ,$sal)
    {
        //$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
        $q = "insert into stock(cantidad_ingreso, cantidad_salida, fecha, codigo_producto) values('$ent','$sal',NOW(),'$cod')";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }

}



?>