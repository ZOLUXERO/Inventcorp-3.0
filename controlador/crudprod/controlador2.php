<?php

include_once("../../modelo/mdlprodeliminar.php");
include_once("../../modelo/mdlseguimientor.php");

if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$objeto2 = new Seguimientor;

	if (session_status() !== PHP_SESSION_ACTIVE) 
	{
		session_start();
	}

	$pruebaarray = array("El usuario", $_SESSION["session"], "con documento", $_SESSION["doc"], "INHABILITO el producto [", $id,"]");

	$ins = filter_var(" " . implode(" ", $pruebaarray) . " ", FILTER_SANITIZE_STRING);

	$res2 = $objeto2->registrar($_SESSION["doc"], $ins);


	$objeto3 = new Productoeli;
	$res3 = $objeto3->eliminar($id);
	header('location: ../../vista/html/crudproductos.php?elim=021s569i001');

}
?>