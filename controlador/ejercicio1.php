<?php 

class CabeceraPagina 
{   /* Creación de la clase */   
private $titulo;            /* atributos de la clase */   
private $ubicacion; 
public $msg;
  
public function __construct($nom,$sal) /* contructor de la clase, recibe 2 atributos */   
{     
$this->titulo=$nom;   /* asignación de parámetros a atributos */     
$this->ubicacion=$sal;   
}   

public function graficar()  /*Método de la clase */   
{     

if ($this->ubicacion > 50000)
{
$msg="Paga";
}
else
{
$msg="No Paga";
}
return $msg;
}

public function imprimir()  /*Método de la clase */   
{ 

} 
} 
 
$cabecera=new CabeceraPagina($_REQUEST['v1'],$_REQUEST['v2']); /* creación objeto con 2 parametros*/ 
$cabecera->graficar(); 
$cabecera->imprimir(); 
$a=$cabecera->graficar();
header("Location: ../vista/html/phppoo2.php?dato=$a"); 

?> 
