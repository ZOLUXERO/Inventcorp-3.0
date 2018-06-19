<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi Proyecto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="../bootstrap/js/bootstrap.min.js"></script>

 
</head>
<body>

<div class="container">
<header>

<?php 
//include_once '../../controlador/control.php'; 
include_once 'header.php'; 
require '../../modelo/clases.php';
$id=$_REQUEST['id'];

?>

</header>

  <div class="container">
   <div class="row">
        
   <?php //include_once 'menulateral.php'; ?>
				
  <div class="col-sm-12 col-md-12">
   <div class="panel panel-default">
   <!-- contenedor del titulo-->
   <div class="panel-heading">
    <h3 class="panel-title">EDICIÓN DE USUARIO</h3>
   </div>
    <!-- contenedor de descripcion ejercicios-->
   <div class="panel-body">
   <p style="color:#DCA430"> Control de usuarios - Edición.</p> 
    <!-- contenedor menu de ejercicios-->
  			  
			   <!-- Contenedor ejercicio-->
             
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
               <form name="areat" action="../../controlador/controler1.php" method="post">
			   <div class="table-responsive">
               
               <?php
			   $objeto= new clases;
			   $res=$objeto->usuarios1($id);	  		
			   $row = $res->fetch_array();
			   ?>    
               <table align="center" style="border-collapse:separate;border-spacing:5px">
			   <tr>
               <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333"></td><td style="color:#666"><input name="iden" type="hidden" value="<?php echo $row['id_usuario']?>" style="width:320px"></td></tr>
			   <tr style="color:#FFF;"><td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Nombre</td><td style="color:#666"><input name="nombre" type="text" value="<?php echo $row['nombre_usuario']?>" style="width:320px"></td></tr>
               <tr style="color:#FFF;"><td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Empresa</td><td style="color:#666"><input name="empresa" type="text" value="<?php echo $row['nombre_empresa']?>" style="width:320px"></td></tr>
               <tr style="color:#FFF;"><td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Telefono</td><td style="color:#666"><input name="apellido" type="text" value="<?php echo $row['telefono']?>" style="width:320px"></td></tr>

               <td align="center" style="font-family:Tahoma, Geneva, sans-serif" colspan="2"><input name="editar" type="submit" style="width:320px" value="Actualizar"></td></tr>
              
            
               
				</table>
                </div>
         
	<?php  $objeto->CloseDB();?>
 

			   </form>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>
