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

 			$pruebaarray34 = array($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$tdo);

			$segu2 = str_replace("<", "'", implode($pruebaarray34));//esto deberia ir en otro archivo pero que mamera
			$segu3 = str_replace("DROP", "'", $segu2);
			$segu4 = str_replace("TABLE", "'", $segu3);
			$segu5 = str_replace("SELECT", "'", $segu4);
			$segu6 = str_replace("FROM", "'", $segu5);
			$segu7 = str_replace("WHERE", "'", $segu6);
			$segu8 = str_replace("TRUNCATE", "'", $segu7);
			$segu9 = str_replace('"', "'", $segu8);

			$repl = str_replace("drop", "'", $segu9);
			$repl2 = str_replace("table", "'", $repl);
			$repl3 = str_replace("select", "'", $repl2);
			$repl4 = str_replace("from", "'", $repl3);
			$repl5 = str_replace("where", "'", $repl4);
			$repl6 = str_replace("truncate", "'", $repl5);

			if (preg_match('/[\'^£$%&*(<)};{#~?>!,|=+¬]/', $repl6))
			{
			   
			header('location: ../../nop.php');

			}else{
 
		    $objeto= new Usuarioe2;
			$res=$objeto->editar2($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$tdo);
   
			header("location:../vista/html/perfilusuario.php?dato1=si"); 
	        
			$objeto->CloseDB();
 	}
}



?>