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

if (isset($_POST['actualizarclie'])) {

		    $codclie=$_REQUEST['id'];   
			$nom1clie=$_REQUEST['nom1clie'];
			$nom2clie=$_REQUEST['nom2clie'];
			$nom3clie=$_REQUEST['nom3clie'];
			$nom4clie=$_REQUEST['nom4clie'];
			$emaclie=$_REQUEST['emaclie'];
			$telclie=$_REQUEST['telclie'];

			$objeto2 = new Clienteact;
			$res2 = $objeto2->actualizarclie($codclie, $nom1clie, $nom2clie, $nom3clie, $nom4clie, $emaclie, $telclie);
			header('location:../../vista/html/crudcliente.php');
			$objeto2->CloseDB();
}

if (isset($_GET['delclie'])) {
	$id = $_GET['delclie'];

	$objeto3 = new Clienteeli;
	$res3 = $objeto3->borrar($id);
	header('location: ../../vista/html/crudcliente.php');

}

?>