<?php

include("../../modelo/mdlcatactualizar.php");

if (isset($_POST['actualizar'])) {
	$cod=$_REQUEST['cod'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];

	$objeto2 = new clases;
	$res2 = $objeto2->actualizar($cod, $nom, $des);
	header('location: ../../vista/html/crudcategoria.php');
}

?>