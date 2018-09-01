<?php

include_once("../../modelo/mdlprodrestaurar.php");

$codi=$_REQUEST['cod'];
 
$objeto= new Productores;
$res=$objeto->restaurar($codi);

if (isset($res)) {

	header("location:../../vista/html/objetoelm.php?dato=si"); 

}
else
{			
	header("location:../../vista/html/objetoelm.php?dato=no");  //Redirige a página registro sin errores
		    
}
?>