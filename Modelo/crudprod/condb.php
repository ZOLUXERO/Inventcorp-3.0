<?php
    
class conexionprod
{

public function __construct()
{   
$this->con = new mysqli("localhost", "root", "", "inventcorp");
 
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