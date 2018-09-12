<?php
include_once("../../modelo/mdlclieregistro.php");
include_once("../../modelo/mdlclieeditar.php");
include_once("../../modelo/mdlclieborrar.php");
include_once("../../modelo/mdlclieverificar.php");


if(isset($_POST["guardarclie"])) {
		        
		    $codclie=$_REQUEST['codclie'];   
			$nom1clie=$_REQUEST['nom1clie'];
			$nom2clie=$_REQUEST['nom2clie'];
			$nom3clie=$_REQUEST['nom3clie'];
			$nom4clie=$_REQUEST['nom4clie'];
			$emaclie=$_REQUEST['emaclie'];
			$telclie=$_REQUEST['telclie'];

			$pruebaarray34 = array($codclie,$nom1clie,$nom2clie,$nom3clie,$nom4clie,$emaclie,$telclie);

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


			$objeto = new Clientereg;

			$objeto3 = new Clientev;

			$res3 = $objeto3->verificarclie($codclie);

			if($res3->num_rows== 1)
	        {	
				header('location:../../vista/html/crudcliente.php?dato1=no01'); 
	        }
			else
			{			
				
				$res = $objeto->registroclie($codclie, $nom1clie, $nom2clie, $nom3clie, $nom4clie, $emaclie, $telclie);

				header('location:../../vista/html/crudcliente.php?dato=856s487i01');
				$objeto->CloseDB();
			}
		}

 
}

if (isset($_POST['actualizarclie'])) {

		    $codclie=$_REQUEST['id'];   
			$nom1clie=$_REQUEST['nom1clie'];
			$nom2clie=$_REQUEST['nom2clie'];
			$nom3clie=$_REQUEST['nom3clie'];
			$nom4clie=$_REQUEST['nom4clie'];
			$emaclie=$_REQUEST['emaclie'];
			$telclie=$_REQUEST['telclie'];

			$pruebaarray34 = array($codclie,$nom1clie,$nom2clie,$nom3clie,$nom4clie,$emaclie,$telclie);

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


			$objeto2 = new Clienteact;
			$res2 = $objeto2->actualizarclie($codclie, $nom1clie, $nom2clie, $nom3clie, $nom4clie, $emaclie, $telclie);
			header('location:../../vista/html/crudcliente.php');
			$objeto2->CloseDB();
	}
}

if (isset($_GET['delclie'])) {
	$id = $_GET['delclie'];

	$objeto3 = new Clienteeli;
	$res3 = $objeto3->borrar($id);
	header('location: ../../vista/html/crudcliente.php');

}

?>