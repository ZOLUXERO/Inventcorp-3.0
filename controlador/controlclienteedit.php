<?php 

include_once '../../modelo/mdlclieobtener.php';

if (isset($_GET['edit'])) {
    $codclie = $_GET['edit'];

	$segu2 = str_replace("<", "'", $codclie);//esto deberia ir en otro archivo pero que mamera
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
   		$objeto3 = new Clienteobt;
   		$res3 = $objeto3->obtenerclie($codclie);

	    $n = mysqli_fetch_array($res3);



	    if ($n['estado_proveedor_cliente'] == 0) {

				header('location: crudcliente.php?no');
    	
    	}
    	else{

    		if ($n['id_rol_listar'] == 1) {

    			if (count($res3) == 1 ) {
		        
			        $nom1clie=$n['primer_nombre_provee_clie'];
			        $nom2clie=$n['segundo_nombre_provee_clie'];
			        $nom3clie=$n['primer_apellido_provee_clie'];
			        $nom4clie=$n['segundo_apellido_provee_clie'];
			        $emaclie=$n['email_proveedor_cliente'];
			        $telclie=$n['telefono_proveedor_cliente'];

    			}
    		}else{
    				header('location: crudcliente.php?cliente');
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


		$objeto1= new Clienteobt;
		$res1=$objeto1->obtenerclie($_GET['edit']);

		if($res1->num_rows == 0)
		{ 
		  header('location: crudcliente.php');
		}
	}
}

?>