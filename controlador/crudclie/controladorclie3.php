<?php

include_once("../../modelo/mdlclieelmcompleto.php");

$codi=$_REQUEST['cod'];
 
$objeto= new Clienteec;
$res=$objeto->eliminarc($codi);

if (isset($res)) {

	header("location:../../vista/html/objetoelmc1.php?elm=si"); 

}
else
{			
	header("location:../../vista/html/objetoelmc1.php?elm=no");  //Redirige a página registro sin errores
		    
}
?>