<?php

include_once("../../modelo/mdlusutoken.php");

if (isset($_GET['token']) == "" or isset($_GET['email']) == "") {
  header('location: recuperar1.php?vacio=sip');
}else{

	$segu2 = str_replace("<", "'", $_GET['token']);//esto deberia ir en otro archivo pero que mamera
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

		$objeto1= new Usuarioto;
		$res1=$objeto1->verifica($_GET['token']);

		$verificar = $res1->fetch_array();

		if($verificar['email'] == $_GET['email'] and $verificar['token'] == $_GET['token'])
		{ 
		  	
		}else{
			header('location: recuperar1.php?nocoinciden=sip');
		}

	}
}

?>