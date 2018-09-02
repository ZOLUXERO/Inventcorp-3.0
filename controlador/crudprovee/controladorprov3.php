<?php

include_once("../../modelo/mdlprovelmcompleto.php");

$codi=$_REQUEST['cod'];
 
$objeto= new Proveedorec;
$res=$objeto->eliminarc($codi);

if (isset($res)) {

	header("location:../../vista/html/objetoelmp1.php?elm=si"); 

}
else
{			
	header("location:../../vista/html/objetoelmp1.php?elm=no");  //Redirige a página registro sin errores
		    
}
?>