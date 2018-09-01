<?php

include_once("../modelo/mdlusutrestaurar.php");

$codi=$_REQUEST['cod'];
 
$objeto= new Usuariores;
$res=$objeto->restaurar($codi);

if (isset($res)) {

	header("location:../vista/html/objetoelmu1.php?dato=si"); 

}
else
{			
	header("location:../vista/html/objetoelmu1.php?dato=no");  //Redirige a página registro sin errores
		    
}
?>