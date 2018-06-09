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
include_once '../../controlador/control.php'; 
include_once 'header.php'; 
require '../../modelo/clases.php';


?>

</header>

  <div class="container">
   <div class="row">
        
   <?php //include_once 'menulateral.php'; ?>
				
  <div class="col-sm-12 col-md-12">
   <div class="panel panel-default">
   <!-- contenedor del titulo-->
   <div class="panel-heading">
    <h3 class="panel-title">USUARIOS EN LA BASE DE DATOS</h3>
   </div>
    <!-- contenedor de descripcion ejercicios-->
   <div class="panel-body">
  
    <!-- contenedor menu de ejercicios-->
  			  
			   <!-- Contenedor ejercicio-->
             
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
               <form name="areat" action="" method="post">
			   <div class="table-responsive">
                
               <table class="table table-hover table-striped" align="center">
			   <tr style="color:#FFF; background-color:#369">
               <td align="center" style="font-family:Tahoma, Geneva, sans-serif">ID Usuario</td>
			   <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Nombre</td>
               <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Apellido</td>
               <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Usuario</td>
			   <!--<td align="center" style="font-family:Tahoma, Geneva, sans-serif" width="300">Contraseña</td> !-->
               
        
            
               <?php
			   $objeto= new clases;
			   $res=$objeto->usuarios();
			  		
			   while($row = $res->fetch_array()){ 
				?>
			   <tr style="font-size:12px">
			   <td align="center"><?php echo $row['idusuario']?></td>
			   <td align="center"><?php echo $row['nombre']?></td>
               <td align="center"><?php echo $row['apellido']?></td>
               <td align="center"><?php echo $row['usuario']?></td>
			   <!--<td align="center"><?php// echo $row['contrasena']?></td> !-->  
               
                    </tr>    
                        
				<?php } $objeto->CloseDB();?>
				</table>
                </div>
         

 

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
