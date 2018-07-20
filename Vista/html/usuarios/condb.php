<?php

class conexion
{

public function __construct()
{	
$this->con = new mysqli("localhost", "root", "", "test");
 
if($this->con->connect_errno) {
	die("Fallo al conectar a la BD: (". $this->con->connect_errno.")");
}
 
}
 
  public function CloseDB() // Cerra conexión a DB
  {
        $this->con->close();
  } 
 
}
?>