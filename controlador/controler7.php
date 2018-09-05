<?php

include_once("../modelo/mdlusueditar2.php");

if(isset($_POST["editar"])) 
{		        
			$id=$_REQUEST['id'];
			$nom1=$_REQUEST['nom1'];
			$nom2=$_REQUEST['nom2'];
			$nom3=$_REQUEST['nom3'];
			$nom4=$_REQUEST['nom4'];
			$ema=$_REQUEST['ema'];
			$tel=$_REQUEST['tel'];
			$tdo=$_REQUEST['tdo'];

 
		    $objeto= new Usuarioe2;
			$res=$objeto->editar2($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$tdo);
   
			header("location:../vista/html/perfilusuario.php?dato1=si"); 
	        
			$objeto->CloseDB();
 
}



?>