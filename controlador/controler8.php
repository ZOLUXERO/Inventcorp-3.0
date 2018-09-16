<?php

include_once("../../modelo/mdlusutoken.php");

if (isset($_GET['token']) == "" or isset($_GET['email']) == "") {
  header('location: recuperar1.php?vacio=sip');
}else{



	$objeto1= new Usuarioto;
	$res1=$objeto1->verifica($_GET['token']);

	$verificar = $res1->fetch_array();

	if($verificar['email'] == $_GET['email'] and $verificar['token'] == $_GET['token'])
	{ 
	  	echo $verificar['email']." |".$_GET['email']." |".$verificar['token']." |".$_GET['token']." |";
	}else{
		header('location: recuperar1.php?nocoinciden=sip');
	}

}


?>