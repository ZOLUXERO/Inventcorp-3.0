<?php
    
class Conexionprov
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
    
    $nom1prov = "";
    $nom2prov = "";
    $nom3prov = "";
    $nom4prov = "";       
    $emaprov = "";
    $telprov = "";
    $codprov = 0;
    $update = false;


?>