<?php

include_once("../../modelo/mdlprodeliminar.php");


if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$objeto3 = new Productoeli;
	$res3 = $objeto3->eliminar($id);
	header('location: ../../vista/html/crudproductos.php?elim=021s569i001');

}
?>