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
include_once '../../modelo/mdlclielistarel.php';
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

<a href="objetoelmu1.php">[Usuarios]</a>
<a href="objetoelm.php">[Productos]</a>
<a href="">[Clientes]</a>
<a href="">[Proveedores]</a>


</div>   

<br>
</div>
    <!-- contenedor de descripcion ejercicios-->
      <div class="panel-body">
         <p style="color:#DCA430">Control de Clientes eliminados. 
          <center>
            <span>
              <?php if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'><div class='alert alert-success'>"."SE RESTAURO CORRECTAMENTE EL CLIENTE"."</div>";}if(isset($_REQUEST['elm'])){ echo "<td colspan='2' align='center'><div class='alert alert-danger'>"."SE HA ELIMINADO EL CLIENTE CORRECTAMENTE"."</div>";}?>
                
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
                    
                    
                        <tr>
                            <tr style="color:#FFF; background-color:#369">
                            <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Código cliente</td>
                            <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Nombre</td>
                            <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Email</td>
                            <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Teléfono</td>
                            <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Estado</td>
                            <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Accion</td>
                        </tr>
                    
                    
                    <?php
                    $objeto= new Clientelise;
                    $res=$objeto->listarclieel();

                    $objetoe= new Escap;

                     while($row = $res->fetch_array(MYSQLI_ASSOC)){
                      ?>
                        <tr>
                            <td align="center"><?php echo $objetoe->escape($row['codigo_proveedor_cliente']); ?></td>
                            <td align="center">
                                <?php 
                                  echo $objetoe->escape($row['primer_nombre_provee_clie']." ");
                                  echo $objetoe->escape($row['segundo_nombre_provee_clie']." ");
                                  echo $objetoe->escape($row['primer_apellido_provee_clie']." ");
                                  echo $objetoe->escape($row['segundo_apellido_provee_clie']);
                                ?>   
                                    
                                </td>
                            <td align="center"><?php echo $objetoe->escape($row['email_proveedor_cliente']); ?></td>
                            <td align="center"><?php echo $objetoe->escape($row['telefono_proveedor_cliente']); ?></td>
                            <td align="center"><?php echo $objetoe->escape($row['estado_proveedor_cliente']); ?></td>

            			         <!--<td align="center"><?php// echo $row['contrasena']?></td>  !-->
                           <td align="center">
                           <center>
                           <a href="../../controlador/crudclie/controladorclie2.php?cod=<?php echo $row['codigo_proveedor_cliente']?>">
                            <span class = "btn btn-success btn-xs">
                              <span class = "glyphicon glyphicon-arrow-left">                                
                              </span>
                            </span>
                           </a> 
                           <a href="../../controlador/crudclie/controladorclie3.php?cod=<?php echo $row['codigo_proveedor_cliente']?>" onclick="return confirm('Esta seguro que desea eliminar por completo este producto?')">
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

  