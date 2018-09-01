<?php

include_once("../../modelo/mdlprodelmcompleto.php");

$codi=$_REQUEST['cod'];
 
$objeto= new Productoec;
$res=$objeto->eliminarc($codi);

if (isset($res)) {

	header("location:../../vista/html/objetoelm.php?elm=si"); 

}
else
{			
	header("location:../../vista/html/objetoelm.php?elm=no");  //Redirige a página registro sin errores
		    
}
?>