<?php

include("../modelo/clases.php");

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
			 $_SESSION["session"]= $actor["nombre_usuario"]." / ".$actor["nombre_empresa"];
		     $_SESSION["validar"]="true";  // Variable de sisión para controlar acceso a páginas
			 if($actor["id_rol"]==2)
             {
             header("location:../vista/html/usuarios/crudusuarios.php");  //Redirige a página de usuario
             }
             else
             {
             header("location:../vista/html/admon.php");  //Redirige a página de administrador
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
			$nom=$_REQUEST['nom'];
			$ape=$_REQUEST['ape'];
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
		    $res=$objeto->registro($usu,$nom,$ape,$numb,$pass);
			header("location:../vista/html/registro.php?dato=no");  //Redirige a página registro sin errores
		    
			}
			$objeto->CloseDB();
 
}

if(isset($_POST["editar"])) 
{		        
			$id=$_REQUEST['iden'];
			$usu=$_REQUEST['usuario'];
			$nom=$_REQUEST['nombre'];
			$ape=$_REQUEST['apellido'];
			$pass=$_REQUEST['pass'];
			//$pass = password_hash($pass,PASSWORD_DEFAULT); // encripta contraseña
 
		    $objeto= new clases;
			$res=$objeto->editar($id,$usu,$nom,$ape,$pass);
   
			header("location:../vista/html/admon.php?dato1=si"); 
	        
			$objeto->CloseDB();
 
}

/*if(isset($_POST["editar1"])) 
{		        
			$id=$_REQUEST['iden'];
			$nom=$_REQUEST['nom'];
			$tel=$_REQUEST['tel']
			$pass=$_REQUEST['pass'];
			//$pass = password_hash($pass,PASSWORD_DEFAULT); // encripta contraseña
 
		    $objeto= new clases;
			$res=$objeto->editar1($id,$usu,$nom,$tel,$pass);
   
			header("location:../vista/html/admon.php?dato1=si"); 
	        
			$objeto->CloseDB();
 
}
*/


?>