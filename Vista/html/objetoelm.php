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
require '../../modelo/crudprod/alumno.model.php';

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
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Codigo Producto</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Producto</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Precio compra</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Precio venta</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">estado</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Categoria</td>
                       <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Acción</td>
                         
                        <?php
      			            $objeto= new clases;
      			            $res=$objeto->listarel();
      			  		
            			   while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
            				  ?>
            			         <tr style="font-size:12px">
                			     <td align="center"><?php echo $row['codigo_producto']?></td>
                           <td align="center"><?php echo $row['nombre_producto']?></td>
                			     <td align="center"><?php echo $row['desc_producto']?></td>
                           <td align="center"><?php echo $row['precio_entrada']?></td>
                           <td align="center"><?php echo $row['precio_salida']?></td>
                           <td align="center"><?php echo $row['fecha_ingreso']?></td>
                           <td align="center"><?php echo $row['estado_producto'] == 1 ? 'activo' : 'eliminado';?></td>
                           <td align="center"><?php echo $row['id_categoria']?></td>
                           

            			         <!--<td align="center"><?php// echo $row['contrasena']?></td>  !-->
                           <td align="center">
                           <center>
                           <a href=""><span class = "btn btn-warning btn-xs"><span class = "glyphicon glyphicon-edit"></span></span></a> 
                           <a href="../../controlador/controler2.php?id=<?php echo $row['codigo_producto']?>"><span class = "btn btn-danger btn-xs"><span class = "glyphicon glyphicon-trash"></span></span></a>
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

  