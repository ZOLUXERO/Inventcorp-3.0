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
                 <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333"></td>
                 <td style="color:#666"><input name="id" type="hidden" class="form-control" value="<?php echo $row['documento']?>" style="width:320px"></td>
                </tr>
			          <tr style="color:#FFF;">
                 <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Primer Nombre</td>
                 <td style="color:#666"><input name="nom1" type="text" class="form-control" value="<?php echo $row['primer_nombre']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Segundo Nombre</td>
                  <td style="color:#666"><input name="nom2" type="text" class="form-control" value="<?php echo $row['segundo_nombre']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Primer Apellido</td>
                  <td style="color:#666"><input name="nom3" type="text" class="form-control" value="<?php echo $row['primer_apellido']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Segundo Apellido</td>
                  <td style="color:#666"><input name="nom4" type="text" class="form-control" value="<?php echo $row['segundo_apellido']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Email</td
                    ><td style="color:#666"><input name="ema" type="text" class="form-control" value="<?php echo $row['email_usuario']?>" style="width:320px"></td>
                  </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Telefono</td>
                  <td style="color:#666"><input name="tel" type="text" class="form-control" value="<?php echo $row['telefono']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Estado</td>
                  <td style="color:#666">

                     <select class="form-control" name="est"  >
                          <option value="1" <?php echo  $row['estado_usuario'] == 1 ? 'selected' : ''; ?>>inactivo</option>
                          <option value="2" <?php echo  $row['estado_usuario'] == 2 ? 'selected' : ''; ?>>activo</option>
                    </select>

                  </td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Permisos</td>
                  <td style="color:#666">

                    <select class="form-control" name="rol"  >
                          <option value="1" <?php echo  $row['id_rol'] == 1 ? 'selected' : ''; ?>>Administrador</option>
                          <option value="2" <?php echo  $row['id_rol'] == 2 ? 'selected' : ''; ?>>usuario</option>
                          <option value="3" <?php echo  $row['id_rol'] == 3 ? 'selected' : ''; ?>>visitante</option>
                    </select>

                  </td>
                </tr>

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
