<?php

include_once("../modelo/mdlobservacionr.php");

if (isset($_POST['guardar'])) {
	$des=$_REQUEST['des'];


$segu2 = str_replace("<", "'", $des);//esto deberia ir en otro archivo pero que mamera
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

if (preg_match('/[\'^£$%&*(<)};{#~?>!,|=_+¬]/', $repl6))
{
   
header('location: ../nop.php');

}else{

	$objeto = new Observr;

			

				if (session_status() !== PHP_SESSION_ACTIVE) 
				{
					session_start();
				}
			
				$res = $objeto->registro($_SESSION["doc"], $des);
				header('location: ../vista/html/observacionesu.php?dato=si');

	}
}

?>