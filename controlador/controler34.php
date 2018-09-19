<?php

include_once("../modelo/mdlusutoken.php");
include_once("../modelo/mdlusuverifica.php");
include_once("controlemail/index34.php");

if(isset($_POST["enviar"])) {
 
    $emar = $_REQUEST["ema"];

 			$pruebaarray34 = array($emar);

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
			   
			header('location: ../nop.php');

			}else{

 
			$objeto= new Usuariov;
			$res=$objeto->verifica($emar); //Ejecuta metodo y devuelve consulta
			 
			if ($res->num_rows == 0) {
			 	header("location:../vista/html/recuperar1.php?enviado=no");
			}else{

				$objeto2= new Usuarioto;
				$token=$objeto2->token();

				$res2=$objeto2->guardartoken($emar,$token);

				$objeto34= new Enviaremaila;
				$email=$objeto34->enviaremail($emar,$token);

				header("location:../vista/html/recuperar1.php?enviado01=si");

			}
	}	 

}

if(isset($_POST["verificar"])) {
 
    $tok = $_REQUEST["token"];

     		$pruebaarray34 = array($tok);

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
			   
			header('location: ../nop.php');

			}else{
 
			$objeto3= new Usuarioto;
			$res3=$objeto3->verifica($tok); //Ejecuta metodo y devuelve consulta


			if ($res3->num_rows == 0) {

			 	header("location:../vista/html/recuperar1.php?token2=token_expiro");

			}else{
				$row = $res3->fetch_array(MYSQLI_ASSOC);
				$ema = $row['email'];

				$token2=$objeto3->delete($tok);

				$token34=$objeto3->token();

				$res34=$objeto3->guardartoken($ema,$token34);

				header("location:../vista/html/recuperar3.php?token=" . urlencode($token34) . "&email=$ema");

			}
		}
}

?>