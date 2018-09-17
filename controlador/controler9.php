<?php

include_once("../modelo/mdlusueditar.php");
include_once("../modelo/mdlusutoken.php");

if(isset($_POST["verificar"])) 
{		    

			$ema=$_REQUEST['ema'];
			$token=$_REQUEST['tok'];    
			$pass1=$_REQUEST['capass1'];
			$pass2=$_REQUEST['capass2'];


 			$pruebaarray34 = array($ema,$tok,$pass1,$pass2);

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

			if (preg_match('/[\'^£$%&*(<)};{#~?>!,|=+¬]/', $repl6))
			{
			   
			header('location: ../nop.php');

			}else{

				$objeto1= new Usuarioto;
				$res1=$objeto1->verifica($token);				

				if ($res1->num_rows == 0) {
					
					header("location: ../nop.php");

				}else{

					$row = $res1->fetch_array(MYSQLI_ASSOC);

					if ($row['token'] == $token and $row['email'] == $ema) {

						if ($pass1 == $pass2) {

							$pass34 = password_hash($pass1,PASSWORD_DEFAULT);

						    $objeto= new Usuarioe;
							$res=$objeto->editarcontrasena($ema,$pass34);
				   	
							$token2=$objeto1->delete($token);

							header("location:../vista/html/recuperar1.php?cambio=si"); 
					        
							$objeto->CloseDB();

						}

						if ($pass1 !== $pass2) {
			   
							header("location:../vista/html/recuperar3.php?token=" . urlencode($token) . "&email=$ema&estado=nocoinciden");
					        
							$objeto->CloseDB();

						}
					}else{

						$token3=$objeto1->delete($token);
						header("location: ../nop.php?nocoinciden");
						$objeto->CloseDB();
					}


				}	


 	}
}



?>