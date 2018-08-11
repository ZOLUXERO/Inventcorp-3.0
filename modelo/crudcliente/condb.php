<?php
    
class Conexionclie
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
    
    $nom1clie = "";
    $nom2clie = "";
    $nom3clie = "";
    $nom4clie = "";       
    $emaclie = "";
    $telclie = "";
    $codclie = 0;
    $update = false;


?>