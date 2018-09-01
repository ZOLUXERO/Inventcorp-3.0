<?php
include_once("../../modelo/mdlprovregistrar.php");
include_once("../../modelo/mdlproveditar.php");
include_once("../../modelo/mdlproveliminar.php");
include_once("../../modelo/mdlprovverificar.php");


if(isset($_POST["guardarprov"])) {
		        
		    $codprov=$_REQUEST['codprov'];   
			$nom1prov=$_REQUEST['nom1prov'];
			$nom2prov=$_REQUEST['nom2prov'];
			$nom3prov=$_REQUEST['nom3prov'];
			$nom4prov=$_REQUEST['nom4prov'];
			$emaprov=$_REQUEST['emaprov'];
			$telprov=$_REQUEST['telprov'];

			$objeto = new Proveedorreg;
			$objeto3 = new Proveedorv;

			$res3 = $objeto3->verificarprov($codprov);

			if($res3->num_rows== 1)
	        {	
				header('location:../../vista/html/crudproveedor.php?dato1=no01'); 
	        }
			else
			{			
			$res = $objeto->registroprov($codprov, $nom1prov, $nom2prov, $nom3prov, $nom4prov, $emaprov, $telprov);
			header('location:../../vista/html/crudproveedor.php?dato=002s3i1');
			$objeto->CloseDB();
			}

 
}

if (isset($_POST['actualizarprov'])) {

		    $codprov=$_REQUEST['id'];   
			$nom1prov=$_REQUEST['nom1prov'];
			$nom2prov=$_REQUEST['nom2prov'];
			$nom3prov=$_REQUEST['nom3prov'];
			$nom4prov=$_REQUEST['nom4prov'];
			$emaprov=$_REQUEST['emaprov'];
			$telprov=$_REQUEST['telprov'];

			$objeto2 = new Proveedoract;
			$res2 = $objeto2->actualizarprov($codprov, $nom1prov, $nom2prov, $nom3prov, $nom4prov, $emaprov, $telprov);
			header('location:../../vista/html/crudproveedor.php');
			$objeto2->CloseDB();
}

if (isset($_GET['delprov'])) {
	$id = $_GET['delprov'];

	$objeto3 = new Proveedoreli;
	$res3 = $objeto3->borrar($id);
	header('location: ../../vista/html/crudproveedor.php');

}

?>