<?php

include_once("../modelo/mdlusueditar.php");

if(isset($_POST["editar"])) 
{		        
			$id=$_REQUEST['id'];
			$nom1=$_REQUEST['nom1'];
			$nom2=$_REQUEST['nom2'];
			$nom3=$_REQUEST['nom3'];
			$nom4=$_REQUEST['nom4'];
			$ema=$_REQUEST['ema'];
			$tel=$_REQUEST['tel'];
			$est=$_REQUEST['est'];
			$rol=$_REQUEST['rol'];
 
		    $objeto= new Usuarioe;
			$res=$objeto->editar($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$est,$rol);
   
			header("location:../vista/html/admon.php?dato1=si"); 
	        
			$objeto->CloseDB();
 
}



?>