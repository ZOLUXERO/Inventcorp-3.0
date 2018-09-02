<?php

include_once("../../modelo/mdlstockr.php");


if(isset($_POST["guardar"])) {
		        
			$cod=$_REQUEST['cod'];
			$ent=$_REQUEST['ent'];
			$sal=$_REQUEST['sal'];
   

			$objeto2= new Stockr;
		    $res2=$objeto2->registro($cod,$ent,$sal);
			header("location:../../vista/html/chart.php?edit=$cod");  //Redirige a página registro sin errores
	
			$objeto->CloseDB();
 
}



?>