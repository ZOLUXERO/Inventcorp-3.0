<?php

include("../../modelo/mdlcateliminar.php");

if (isset($_GET['del'])) {
	$cod = $_GET['del'];

	$objeto3 = new Cateogriaeli;
	$res3 = $objeto3->eliminar($cod);
	header('location: ../../vista/html/crudcategoria.php');

}

?>