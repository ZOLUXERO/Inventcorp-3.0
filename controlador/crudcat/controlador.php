<?php

include_once("../../modelo/mdlcatregistro.php");
include_once("../../modelo/mdlcatactualizar.php");

	

if (isset($_POST['guardarcat'])) {
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];

	$objeto = new Categoriareg;
	$res = $objeto->registrocat($nom, $des);
	header('location: ../../vista/html/crudcategoria.php');

}

if (isset($_POST['actualizar'])) {
	$cod=$_REQUEST['cod'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];

	$objeto2 = new Categoriaact;
	$res2 = $objeto2->actualizar($cod, $nom, $des);
	header('location: ../../vista/html/crudcategoria.php');
}

?>