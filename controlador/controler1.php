<?php

include_once("../modelo/clases.php");

if(isset($_POST["enviar"])) {
 
      $loginNombre = $_REQUEST["usu"];
	  $loginPassword=$_REQUEST['pass'];
 
	  $objeto= new clases;
	  $res=$objeto->logueo($loginNombre); //Ejecuta metodo y devuelve consulta
	 	 
	  if($res->num_rows == 0)
         { 
          header("location:../vista/html/seguridaddb.php?error=si");  //Redirige al index pasando la variable error
         }
        //En otro caso En $reg se guarda el resultado de la consulta. Al segundo posición de SESION se le asigna el id del usuario
        //Redirige a página logueada
      else
		 {       
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
             	header("location:../vista/html/cruduproductos.php");
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
			$objeto->CloseDB();
 
}

if(isset($_POST["registrar"])) {
		        
			$usu=$_REQUEST['usu'];
			$nom1=$_REQUEST['nom1'];
			$nom2=$_REQUEST['nom2'];
			$nom3=$_REQUEST['nom3'];
			$nom4=$_REQUEST['nom4'];
			$ape=$_REQUEST['ape'];
			$tdo=$_REQUEST['tdo'];
			$numb=$_REQUEST['numb'];
			$pass=$_REQUEST['pass'];

			$pass = password_hash($pass,PASSWORD_DEFAULT); // encripta contraseña
 
		    $objeto= new clases;
			$res=$objeto->verifica($usu);
   
			if($res->num_rows== 1)
	        {	
			header("location:../vista/html/registro.php?dato1=no"); 
	        }
			else
			{			
		    $res=$objeto->registro($usu,$nom1,$nom2,$nom3,$nom4,$ape,$tdo,$numb,$pass);
			header("location:../vista/html/registro.php?dato=no");  //Redirige a página registro sin errores
		    
			}
			$objeto->CloseDB();
 
}

if(isset($_POST["editar"])) 
{		        
			$id=$_REQUEST['id'];
			$nom1=$_REQUEST['nom1'];
			$nom2=$_REQUEST['nom2'];
			$nom3=$_REQUEST['nom3'];
			$nom4=$_REQUEST['nom4'];
			$ema=$_REQUEST['ema'];
			$tel=$_REQUEST['tel'];
			$est=$_REQUEST['est'];
			$rol=$_REQUEST['rol'];
			//$pass = password_hash($pass,PASSWORD_DEFAULT); // encripta contraseña
 
		    $objeto= new clases;
			$res=$objeto->editar($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$est,$rol);
   
			header("location:../vista/html/admon.php?dato1=si"); 
	        
			$objeto->CloseDB();
 
}

if(isset($_POST["guardar"])) 
{		        
			$ent=$_REQUEST['ent'];
			$sal=$_REQUEST['sal'];
			$cod=$_REQUEST['cod'];
			//$pass = password_hash($pass,PASSWORD_DEFAULT); // encripta contraseña
 
		    $objeto= new clases;
			$res=$objeto->regisstock($ent,$sal,$cod);

			$objeto= new clases;
			$res2=$objeto->obtener($cod);


			$row = $res2->fetch_array(MYSQLI_ASSOC);
   
			header("location:../vista/html/chart.php?edit1=$cod"); 
	        
			$objeto->CloseDB();
 
}




?>