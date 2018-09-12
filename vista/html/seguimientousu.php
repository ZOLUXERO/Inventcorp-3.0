
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
 
<div class="col-sm-2 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>

</div>


     
          <!-- contenedor menu de ejercicios-->
        			  
      			   <!-- Contenedor ejercicio-->
                   
      			 
      			    <div class="col-sm-10 col-md-10">
                <h3>Acciones realizadas en el dia</h3>
                  <hr style="border-top: 1px double #797979;"> 
      			    <div class="table-responsive">
                      
                     <table class="table table-hover table-striped" align="center">
      			         
                     <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Usuario</td>                     
                     <td class="col-sm-10 col-md-10" align="center" style="font-family:Tahoma, Geneva, sans-serif">Acciones</td>
      			         <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>

                          
                     <?php
      			           $objeto= new clases;
      			           $res=$objeto->listarse();
                       
      			  		
            			   while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
            				  ?>
            			         <tr style="font-size:12px">
                			     <td align="center"><?php echo $objeto->escape($row['usuario'])?></td>
                           <td align="center"><?php echo $objeto->escape($row['descripcion'])?></td>
                			     <td style="color: #369" align="center"><?php echo $objeto->escape($row['fecha'])?></td>
                                                
                               
                                    
            				  <?php } $objeto->CloseDB();?>
      				        </table>

                      </div>
               

       


			  
			  
            </div>
         
        </div>
      </div>

 
</body>
</html>

  