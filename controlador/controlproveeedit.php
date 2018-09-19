<?php 

include_once'../../modelo/mdlprovobtener.php';

if (isset($_GET['edit'])) {
    $codprov = $_GET['edit'];

	$segu2 = str_replace("<", "'", $codprov);//esto deberia ir en otro archivo pero que mamera
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
	    $objeto3 = new Proveedorobt;
	    $res3 = $objeto3->obtenerprov($codprov);

	    $n = mysqli_fetch_array($res3);



	    if ($n['estado_proveedor_cliente'] == 0) {

				header('location: crudproveedor.php?no');
    	
    	}
    	else{

    		if ($n['id_rol_listar'] == 2) {

    			if (count($res3) == 1 ) {
		        
			        $nom1prov=$n['primer_nombre_provee_clie'];
			        $nom2prov=$n['segundo_nombre_provee_clie'];
			        $nom3prov=$n['primer_apellido_provee_clie'];
			        $nom4prov=$n['segundo_apellido_provee_clie'];
			        $emaprov=$n['email_proveedor_cliente'];
			        $telprov=$n['telefono_proveedor_cliente'];

    			}
    		}else{
    				header('location: crudproveedor.php?proveedor');
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


		$objeto1= new Proveedorobt;
		$res1=$objeto1->obtenerprov($_GET['edit']);

		if($res1->num_rows == 0)
		{ 
		  header('location: crudproveedor.php');
		}
	}
}

?>