<?php 
include_once '../../modelo/mdlprodobtener.php';

if (isset($_GET['edit'])) {
    $cod = $_GET['edit'];

	$segu2 = str_replace("<", "'", $cod);//esto deberia ir en otro archivo pero que mamera
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

	if (preg_match('/[\'^£$%&*(<)};{#~?>!,|=+¬]/', $repl6))
	{
			   
	header('location: ../../nop.php');

	}else{

	    $update = true;
	    $objeto3 = new Productoobt;
	    $res3 = $objeto3->obtener($cod);

	    $n = mysqli_fetch_array($res3);


	    if ($n['estado_producto'] == 0) {

				header('location: crudproductos.php');
    	
    	}
    	else{

	    		if ( $res3 ) {

		        
		        $nom=$n['nombre_producto'];
		        $des=$n['desc_producto'];
		        $pen=$n['precio_entrada'];
		        $pas=$n['precio_salida'];
		        $fec=$n['fecha_ingreso'];
		        $cat=$n['id_categoria'];

    		}
	    }
	}
}

if (isset($_GET['edit']) == "") {
	
}else{

 			

	$segu2 = str_replace("<", "'", $_GET['edit']);//esto deberia ir en otro archivo pero que mamera
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

	if (preg_match('/[\'^£$%&*(<)};{#~?>!,|=+¬]/', $repl6))
	{
			   
			header('location: ../../nop.php');

	}else{


		$objeto1= new Productoobt;
		$res1=$objeto1->obtener($_GET['edit']);

		if($res1->num_rows == 0)
		{ 
		  header('location: crudproductos.php');
		}
	}
}

?>