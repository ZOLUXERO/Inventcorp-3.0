<?php

include("../../modelo/crudprod/alumno.model.php");

	

if (isset($_POST['guardar'])) {
	$cod=$_REQUEST['cod'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];
	$pen=$_REQUEST['pen'];
	$pas=$_REQUEST['pas'];
	$fec=$_REQUEST['fec'];
	$cat=$_REQUEST['cat'];

	$objeto = new clases;

	if (session_status() !== PHP_SESSION_ACTIVE) 
	{
		session_start();
	}

	$pruebaarray = array("El usuario", $_SESSION["session"], "con documento", $_SESSION["doc"], "inserto un producto nuevo (", $cod,")");

	$ins = filter_var(" " . implode(" ", $pruebaarray) . " ", FILTER_SANITIZE_STRING);

    $res = $objeto->testingresar($_SESSION["doc"], $ins);

	
	$res = $objeto->registro($cod, $nom, $des, $pen, $pas, $fec, $cat);
	header('location: ../../vista/html/crudproductos.php');

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
	$resl= $objeto2->obtener($cod);

	if (count($resl) == 1 ) {
        $n = mysqli_fetch_array($resl);
        $nomp=$n['nombre_producto'];
        $desp=$n['desc_producto'];
        $penp=$n['precio_entrada'];
        $pasp=$n['precio_salida'];
        $fecp=$n['fecha_ingreso'];
        $catp=$n['id_categoria'];
    }

	if (session_status() !== PHP_SESSION_ACTIVE) 
	{
		session_start();
	}

    $pruebaarray = array("El usuario", $_SESSION["session"], "con documento", $_SESSION["doc"], "remplazo");

    if ($nom !== $nomp) {
    	array_push($pruebaarray, " (", $nomp, ") por (", $nom,")");
    }
    if ($des !== $desp) {
    	array_push($pruebaarray, ", (", $desp, ") por (", $des, ")");
    }
    if ($pen !== $penp) {
    	array_push($pruebaarray, ", (", $penp, ") por (", $pen, ")");
    }
    if ($pas !== $pasp) {
    	array_push($pruebaarray, ", (", $pasp, ") por (", $pas, ")");
    }
    if ($fec !== $fecp) {
    	array_push($pruebaarray, ", (", $fecp, ") por (", $fec, ")");
    }
    if ($cat !== $catp) {
    	array_push($pruebaarray, ", (", $catp, ") por (", $cat, ")");
    }

    

    $ins = filter_var(" " . implode(" ", $pruebaarray) . " ", FILTER_SANITIZE_STRING);

    $res2 = $objeto2->testingresar($_SESSION["doc"], $ins);

	$res2 = $objeto2->actualizar($cod, $nom, $des, $pen, $pas, $fec, $cat);
	header('location: ../../vista/html/crudproductos.php');
}




	

if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$objeto3 = new clases;
	$res3 = $objeto3->eliminar($id);
	header('location: ../../vista/html/crudproductos.php');

}

?>