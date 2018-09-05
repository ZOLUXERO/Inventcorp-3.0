<?php

include_once("../modelo/mdlusulogueo.php");
include_once("../modelo/mdlusulogueo2.php");

if(isset($_POST["enviar"])) {
 
      $loginNombre = $_REQUEST["usu"];
	  $loginPassword=$_REQUEST['pass'];
 
	  $objeto= new Usuariol;
	  $res=$objeto->logueo($loginNombre); //Ejecuta metodo y devuelve consulta
	 	 
	  if($res->num_rows == 0)
         { 
          header("location:../vista/html/seguridaddb.php?error=si");  //Redirige al index pasando la variable error
         }
        //En otro caso En $reg se guarda el resultado de la consulta. Al segundo posición de SESION se le asigna el id del usuario
        //Redirige a página logueada
      else
		 {  

		 		$objeto2= new Usuariol2;
	  			$res2=$objeto2->logueo2($loginNombre);
	  			$verifica = $res2->fetch_array();
	  				if($verifica['estado_usuario'] == 0)
			        { 
			          header("location:../vista/html/seguridaddb.php?errorsi2=si01");  //Redirige al index pasando la variable error
			        }

			        else{
					   $actor = $res->fetch_array(); // Obtiene una fila de resultados como un array asociativo, numérico, o ambos	 
			           if (password_verify($loginPassword,$actor["contrasena"]))
					   {
						 session_start();
						 $_SESSION["session"]= $actor["primer_nombre"];
						 $_SESSION["doc"]= $actor["documento"];
						 $_SESSION["idrol"]= $actor["id_rol"];
					     $_SESSION["validar"]="true";  // Variable de sisión para controlar acceso a páginas
						 if($actor["id_rol"]==1)
			             {
			               header("location:../vista/html/admon.php");  //Redirige a página de administrador
			             }
			             elseif ($actor["id_rol"]==2) {
			             	header("location:../vista/html/crudproductos.php");
			             }
			             elseif ($actor["id_rol"]==3) {
			             	header("location:../index.php");
			             }
			              
					   }
					   else
					   {
						  header("location:../vista/html/seguridaddb.php?error=si");  
					   }
					}
		  }	  	
			$objeto->CloseDB();
 
}


?>