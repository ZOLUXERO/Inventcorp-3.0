<?php

include_once("../modelo/mdlusutoken.php");
include_once("../modelo/mdlusuverifica.php");
include_once("controlemail/index34.php");

if(isset($_POST["enviar"])) {
 
    $emar = $_REQUEST["ema"];
 
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

		header("location:../vista/html/recuperar2.php?token=" . urlencode($token) . "&email=$emar");

	}	 

}

if(isset($_POST["verificar"])) {
 
    $tok = $_REQUEST["token"];
 
	$objeto3= new Usuarioto;
	$res3=$objeto3->verifica($tok); //Ejecuta metodo y devuelve consulta


	if ($res3->num_rows == 0) {

	 	header("location:../vista/html/recuperar2.php?token2=token_expiro");

	}else{
		$row = $res3->fetch_array(MYSQLI_ASSOC);
		$ema = $row['email'];
		header("location:../vista/html/recuperar3.php?token3=$tok?email=$ema");

	}
}

?>