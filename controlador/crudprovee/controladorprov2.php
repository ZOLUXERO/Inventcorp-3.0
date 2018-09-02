<?php

include_once("../../modelo/mdlprovrestaurar.php");

$codi=$_REQUEST['cod'];
 
$objeto= new Proveedorres;
$res=$objeto->restaurar($codi);

if (isset($res)) {

	header("location:../../vista/html/objetoelmp1.php?dato=si"); 

}
else
{			
	header("location:../../vista/html/objetoelmp1.php?dato=no");  //Redirige a página registro sin errores
		    
}
?>