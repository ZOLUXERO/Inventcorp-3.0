<?php

include_once("../../modelo/mdlprodverificar.php");
include_once("../../modelo/mdlprodregistrar.php");
include_once("../../modelo/mdlprodobtener.php");
include_once("../../modelo/mdlprodactualizar.php");
include_once("../../modelo/mdlseguimientor.php");

	

if (isset($_POST['guardar'])) {
	$cod=$_REQUEST['cod'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];
	$pen=$_REQUEST['pen'];
	$pas=$_REQUEST['pas'];
	$fec=$_REQUEST['fec'];
	$cat=$_REQUEST['cat'];



$pruebaarray34 = array($cod,$nom,$des,$pen,$pas,$fec,$cat);

$segu2 = str_replace("<", "'", implode($pruebaarray34));//esto deberia ir en otro archivo pero que mamera
$segu3 = str_replace("DROP", "'", $segu2);
$segu4 = str_replace("TABLE", "'", $segu3);
$segu5 = str_replace("SELECT", "'", $segu4);
$segu6 = str_replace("FROM", "'", $segu5);
$segu7 = str_replace("WHERE", "'", $segu6);
$segu8 = str_replace("TRUNCATE", "'", $segu7);
$segu9 = str_replace('"', "'", $segu8);

$repl = str_replace("drop", "'", $segu9);
$repl2 = str_replace("table", "'", $repl);
$repl3 = str_replace("select", "'", $repl2);
$repl4 = str_replace("from", "'", $repl3);
$repl5 = str_replace("where", "'", $repl4);
$repl6 = str_replace("truncate", "'", $repl5);

if (preg_match('/[\'^£$%&*(<)};{@#~?>!,|=_+¬]/', $repl6))
{
   
header('location: ../../nop.php');

}else{

	$objeto = new Productov;
	$objeto2 = new Productoreg;
	$objeto3 = new Seguimientor;

	$res = $objeto->verificarcod($cod);

	if($res->num_rows== 1)
	        {	
			header("location: ../../vista/html/crudproductos.php?dato1=no"); 
	        }
			else
			{			

				if (session_status() !== PHP_SESSION_ACTIVE) 
				{
					session_start();
				}

				$pruebaarray = array("El usuario", $_SESSION["session"], "con documento", $_SESSION["doc"], "inserto un producto nuevo [", $cod,"]");

				$ins = filter_var(" " . implode(" ", $pruebaarray) . " ", FILTER_SANITIZE_STRING);

			    $res2 = $objeto3->registrar($_SESSION["doc"], $ins);

				
				$res3 = $objeto2->registro($cod, $nom, $des, $pen, $pas, $fec, $cat);
				header('location: ../../vista/html/crudproductos.php?dato=si');
			}


}
}


if (isset($_POST['actualizar'])) {
	$cod=$_REQUEST['id'];
	$nom=$_REQUEST['nom'];
	$des=$_REQUEST['des'];
	$pen=$_REQUEST['pen'];
	$pas=$_REQUEST['pas'];
	$fec=$_REQUEST['fec'];
	$cat=$_REQUEST['cat'];

$pruebaarray35 = array($cod,$nom,$des,$pen,$pas,$fec,$cat);

$segu2 = str_replace("<", "'", implode($pruebaarray35));//esto deberia ir en otro archivo pero que mamera
$segu3 = str_replace("DROP", "'", $segu2);
$segu4 = str_replace("TABLE", "'", $segu3);
$segu5 = str_replace("SELECT", "'", $segu4);
$segu6 = str_replace("FROM", "'", $segu5);
$segu7 = str_replace("WHERE", "'", $segu6);
$segu8 = str_replace("TRUNCATE", "'", $segu7);
$segu9 = str_replace('"', "'", $segu8);

$repl = str_replace("drop", "'", $segu9);
$repl2 = str_replace("table", "'", $repl);
$repl3 = str_replace("select", "'", $repl2);
$repl4 = str_replace("from", "'", $repl3);
$repl5 = str_replace("where", "'", $repl4);
$repl6 = str_replace("truncate", "'", $repl5);

if (preg_match('/[\'^"£$%&*(<)};{@#~?>!,|=_+¬]/', $repl6))
{
   
header('location: ../../nop.php');

}else{

	$objeto4 = new Productoobt;
	$objeto5 = new Productoact;
	$objeto6 = new Seguimientor;

	$res4= $objeto4->obtener($cod);



	if (count($res4) == 1 ) {
        $n = mysqli_fetch_array($res4);
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

    $pruebaarray = array("El usuario", $_SESSION["session"], "con documento", $_SESSION["doc"], "remplazo en el producto [",$cod,"] ,");

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

    $pruebaarray2 = array("El usuario", $_SESSION["session"], "con documento", $_SESSION["doc"], "remplazo");

    if($pruebaarray == $pruebaarray2){
    	header('location: ../../vista/html/crudproductos.php');
    }
    if($pruebaarray !== $pruebaarray2){
    $ins = filter_var(" " . implode(" ", $pruebaarray) . " ", FILTER_SANITIZE_STRING);

    $res5 = $objeto6->registrar($_SESSION["doc"], $ins);

	$res6 = $objeto5->actualizar($cod, $nom, $des, $pen, $pas, $fec, $cat);
	header('location: ../../vista/html/crudproductos.php?dato2=01');
	}
  }
}


?>