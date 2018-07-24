<?php

include("../../modelo/crudcat/alumno.model.php");

	


if (isset($_POST['guardarcat'])) {
	$cod=$_REQUEST['cod'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];

	$objeto = new clases;
	$res = $objeto->registrocat($cod, $nom, $des);
	header('location: ../../vista/html/crudcategoria.php');

}

if (isset($_POST['actualizar'])) {
	$cod=$_REQUEST['cod'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];

	$objeto2 = new clases;
	$res2 = $objeto2->actualizar($cod, $nom, $des);
	header('location: ../../vista/html/crudcategoria.php');
}




	

if (isset($_GET['del'])) {
	$cod = $_GET['del'];

	$objeto3 = new clases;
	$res3 = $objeto3->eliminar($cod);
	header('location: ../../vista/html/crudcategoria.php');

}

?>