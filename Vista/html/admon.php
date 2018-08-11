
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

<?php 
include_once '../../controlador/control.php'; 
include_once '../../controlador/controladmin.php';
require '../../modelo/mdlusulistar.php';
require '../../modelo/mdlescape.php';

include_once 'header.php'; 
?>


<div class="container-fluid">
  <div class="row">
 
<div class="col-sm-3 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>

</div>

   <div class="col-sm-10 col-md-10">
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
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Documento</td>                     
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Tipo de documento</td>
      			         <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Email</td>
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Nombre Completo</td>
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Telefono</td>
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Estado</td>
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Permisos</td>
      			   <!--<td align="center" style="font-family:Tahoma, Geneva, sans-serif" width="300">Contraseña</td> !-->
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Acción</td>
                          
                     <?php
      			           $objeto= new Usuario;
      			           $res=$objeto->listarusuarios();

                       $objeto2= new Escap;
                       
      			  		
            			   while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
            				  ?>
            			         <tr style="font-size:12px">
                			     <td align="center"><?php echo $objeto2->escape($row['documento'])?></td>
                           <td align="center"><?php echo $objeto2->escape($row['tipo_documento'])?></td>
                			     <td align="center"><?php echo $objeto2->escape($row['email_usuario'])?></td>
                           <td align="center">
                            <?php 
                              echo $objeto2->escape($row['primer_nombre']." ");
                              echo $objeto2->escape($row['segundo_nombre']." ");
                              echo $objeto2->escape($row['primer_apellido']." ");
                              echo $objeto2->escape($row['segundo_apellido']);
                            ?>                             
                           </td>
                           <td align="center"><?php echo $objeto2->escape($row['telefono'])?></td>
                           <td align="center"><?php echo $objeto2->escape($row['estado_usuario'] == 1 ? 'activo' : 'inactivo');?></td>
                           <td align="center">

                            <?php 
                            if ($objeto2->escape($row['id_rol'] == 1)) {
                              echo "Administrador";
                            }
                            elseif ($objeto2->escape($row['id_rol'] == 2)) {
                              echo "Usuario";
                            }
                            elseif ($objeto2->escape($row['id_rol'] == 3)) {
                              echo "visitante";
                            }                            
                            ?>
                              
                            </td>
            			         
                           <td align="center"><center><a href="editarusuario.php?id=<?php echo $row['documento']?>"><span class = "btn btn-warning btn-xs"><span class = "glyphicon glyphicon-edit"></span></span></a> 
                           <a href="../../controlador/controler2.php?id=<?php echo $row['documento']?>"><span class = "btn btn-danger btn-xs"><span class = "glyphicon glyphicon-trash"></span></span></a></center></td>
                       
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

  