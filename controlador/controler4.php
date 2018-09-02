<?php

include_once("../modelo/mdlusuverifica.php");
include_once("../modelo/mdlusuverifica2.php");
include_once("../modelo/mdlusuregistro.php");


if(isset($_POST["registrar"])) {
		        
			$usu=$_REQUEST['usu'];
			$nom1=$_REQUEST['nom1'];
			$nom2=$_REQUEST['nom2'];
			$nom3=$_REQUEST['nom3'];
			$nom4=$_REQUEST['nom4'];
			$ape=$_REQUEST['ape'];
			$tdo=$_REQUEST['tdo'];
			$numb=$_REQUEST['numb'];
			$pass=$_REQUEST['pass'];

			$pass = password_hash($pass,PASSWORD_DEFAULT); // encripta contraseña
 
		    $objeto= new Usuariov;
			$res=$objeto->verifica($usu);
   
			if($res->num_rows== 1)
	        {	
			header("location:../vista/html/registro.php?dato1=no"); 
	        }
			else
			{		
			$objeto3= new Usuariov2;
			$res3=$objeto3->verifica2($ape);

				if ($res3->num_rows== 1) {
					header("location:../vista/html/registro.php?daton10o=no"); 
				}else{
				$objeto2= new Usuarior;
			    $res2=$objeto2->registro($usu,$nom1,$nom2,$nom3,$nom4,$ape,$tdo,$numb,$pass);
				header("location:../vista/html/registro.php?dato=no");  //Redirige a página registro sin errores
		    
			}
		}
			$objeto->CloseDB();
 
}



?>