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
include_once '../../modelo/mdlusulistarel.php';
include_once '../../modelo/mdlescape.php';
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

<div class="col-sm-4 col-md-4"><h class="panel-title">Elementos eliminados</h></div> 
<div align="right" class="col-sm-8 col-md-8">

<a href="">[Usuarios]</a>
<a href="objetoelm.php">[Productos]</a>
<a href="objetoelmc1.php">[Clientes]</a>
<a href="objetoelmp1.php">[Proveedores]</a>


</div>   

<br>
</div>
    <!-- contenedor de descripcion ejercicios-->
      <div class="panel-body">
         <p style="color:#DCA430">Control de Usuarios eliminados. 
          <center>
            <span>
              <?php if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'><div class='alert alert-success'>"."SE RESTAURO CORRECTAMENTE EL USUARIO"."</div>";}if(isset($_REQUEST['dato1'])){ echo "<td colspan='2' align='center'><div class='alert alert-danger'>"."SE HA ELIMINADO EL USUARIO CORRECTAMENTE"."</div>";}?>
                
              </span>
            </center>
          </p> 
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
                       $objeto= new Usuarioel;
                       $res=$objeto->listarel();

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
                            if ($objeto2->escape($row['id_rol'] == 2)) {
                              echo "Usuario";
                            }
                            if ($objeto2->escape($row['id_rol'] == 3)) {
                              echo "visitante";
                            }                            
                            ?>
                             
                                                     
                           </td>
                                                       
                            
                           <td align="center">
                           <center>
                           <a href="../../controlador/controler6.php?cod=<?php echo $row['documento']?>">
                            <span class = "btn btn-success btn-xs">
                              <span class = "glyphicon glyphicon-arrow-left">                                
                              </span>
                            </span>
                           </a> 
                           <a href="../../controlador/controler5.php?cod=<?php echo $row['documento']?>" onclick="return confirm('Esta seguro que desea eliminar por completo este usuario?')">
                            <span class = "btn btn-danger btn-xs">
                              <span class = "glyphicon glyphicon-trash">                                
                              </span>
                            </span>
                           </a>
                           </center>
                           </td>                        

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