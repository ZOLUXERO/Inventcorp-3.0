<?php

include_once("../../modelo/mdlclierestaurar.php");

$codi=$_REQUEST['cod'];
 
$objeto= new Clienteres;
$res=$objeto->restaurar($codi);

if (isset($res)) {

	header("location:../../vista/html/objetoelmc1.php?dato=si"); 

}
else
{			
	header("location:../../vista/html/objetoelmc1.php?dato=no");  //Redirige a página registro sin errores
		    
}
?>