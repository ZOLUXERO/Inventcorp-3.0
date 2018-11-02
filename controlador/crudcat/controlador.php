<?php

include_once("../../modelo/mdlcatregistro.php");
include_once("../../modelo/mdlcatactualizar.php");

	

if (isset($_POST['guardarcat'])) {

			$nom=$_REQUEST['nom'];
			$des=$_REQUEST['des'];

			$pruebaarray34 = array($nom,$des);

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

			if (preg_match('/[\'^£$%&*(<)};{@#~?>!,|=_+¬]/', $repl6))
			{
			   
			header('location: ../../nop.php');

			}else{

			$objeto = new Categoriareg;
			$res = $objeto->registrocat($nom, $des);
			header('location: ../../vista/html/crudcategoria.php');

	}
}
if (isset($_POST['actualizar'])) {

			$cod=$_REQUEST['cod'];
			$nom=$_REQUEST['nom'];
			$des=$_REQUEST['des'];asdasdasdadasdas

			$pruebaarray34 = array($cod,$nom,$des);

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

			if (preg_match('/[\'^£$%&*(<)};{@#~?>!,|=_+¬]/', $repl6))
			{
			   
			header('location: ../../nop.php');

			}else{
			$objeto2 = new Categoriaact;
			$res2 = $objeto2->actualizar($cod, $nom, $des);
			header('location: ../../vista/html/crudcategoria.php');
		}
}

?>