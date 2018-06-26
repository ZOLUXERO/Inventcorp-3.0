<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi Proyecto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../bootstrap/cover.css" rel="stylesheet">
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
    <h3 class="panel-title">USUARIOS REGISTRADOS</h3>
   </div>
    <!-- contenedor de descripcion ejercicios-->
   <div class="panel-body">
   <p style="color:#DCA430">Control de usuarios. <center><span><?php if(isset($_REQUEST['dato'])){ echo "BORRADO EXITOSO";}if(isset($_REQUEST['dato1'])){ echo "ACTUALIZACION EXITOSA";}?></span></center></p> 
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
               <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Empresa</td>
               <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Telefono</td>
			   <!--<td align="center" style="font-family:Tahoma, Geneva, sans-serif" width="300">Contraseña</td> !-->
               <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Acción</td>
                    
               <?php
			   $objeto= new clases;
			   $res=$objeto->usuarios();
			  		
			   while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
				?>
			   <tr style="font-size:12px">
			   <td align="center"><?php echo $row['cedula']?></td>
			   <td align="center"><?php echo $row['email_usuario']?></td>
               <td align="center"><?php echo $row['nombre_usuario']?></td>
               <td align="center"><?php echo $row['telefono']?></td>
			   <!--<td align="center"><?php// echo $row['contrasena']?></td>  !-->
               <td align="center"><center><a href="editarusuario.php?id=<?php echo $row['cedula']?>"><span class = "btn btn-warning btn-xs"><span class = "glyphicon glyphicon-edit"></span></span></a> <a href="../../controlador/controler2.php?id=<?php echo $row['cedula']?>"><span class = "btn btn-danger btn-xs"><span class = "glyphicon glyphicon-trash"></span></span></a></center></td>
           
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
