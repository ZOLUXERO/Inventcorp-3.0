<?php

include("alumno.model.php");

	

if (isset($_POST['guardar'])) {
	$nom=$_REQUEST['nom'];
	$ape=$_REQUEST['ape'];
	$sex=$_REQUEST['sex'];
	$fec=$_REQUEST['fec'];

	$objeto = new clases;
	$res = $objeto->registro($nom, $ape, $sex, $fec);
	header('location: crudusuarios.php');

}

if (isset($_POST['actualizar'])) {
	$id=$_REQUEST['id'];
	$nom=$_REQUEST['nom'];
	$ape=$_REQUEST['ape'];
	$sex=$_REQUEST['sex'];
	$fec=$_REQUEST['fec'];

	$objeto2 = new clases;
	$res2 = $objeto2->actualizar($id, $nom, $ape, $sex, $fec);
	header('location: crudusuarios.php');
}




	

if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$objeto3 = new clases;
	$res3 = $objeto3->eliminar($id);
	header('location: crudusuarios.php');

}

?>