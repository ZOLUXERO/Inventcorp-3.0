<?php

include("alumno.model.php");

	

if (isset($_POST['guardar'])) {
	$cod=$_REQUEST['cod'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];
	$pen=$_REQUEST['pen'];
	$pas=$_REQUEST['pas'];
	$fec=$_REQUEST['fec'];
	$cat=$_REQUEST['cat'];


	$objeto = new clases;
	$res = $objeto->registro($cod, $nom, $des, $pen, $pas, $fec, $cat);
	header('location: crudproductos.php');

}

if (isset($_POST['actualizar'])) {
	$cod=$_REQUEST['id'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];
	$pen=$_REQUEST['pen'];
	$pas=$_REQUEST['pas'];
	$fec=$_REQUEST['fec'];
	$cat=$_REQUEST['cat'];

	$objeto2 = new clases;
	$res2 = $objeto2->actualizar($cod, $nom, $des, $pen, $pas, $fec, $cat);
	header('location: crudproductos.php');
}




	

if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$objeto3 = new clases;
	$res3 = $objeto3->eliminar($id);
	header('location: crudproductos.php');

}

?>