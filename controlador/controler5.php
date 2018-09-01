<?php

include("../modelo/mdlusueliminarsi.php");
	        
			$usu=$_REQUEST['cod'];
 
		    $objeto= new Usuariosi;
			$res=$objeto->borrars($usu);
			if(isset($res))
	        {	
			header("location:../vista/html/objetoelmu1.php?dato1=si"); 
	        }
			else
			{			
			header("location:../vista/html/objetoelmu1.php?dato1=no");  //Redirige a página registro sin errores
		    
			}
			$objeto->CloseDB();
 
?>