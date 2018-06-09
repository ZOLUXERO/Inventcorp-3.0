<?php

include("../modelo/clases.php");
	        
			$usu=$_REQUEST['id'];
 
		    $objeto= new clases;
			$res=$objeto->borrar($usu);
			if(isset($res))
	        {	
			header("location:../vista/html/admon.php?dato=si"); 
	        }
			else
			{			
			header("location:../vista/html/admon.php?dato=no");  //Redirige a página registro sin errores
		    
			}
			$objeto->CloseDB();
 
?>