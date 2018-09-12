
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
include_once '../../modelo/mdlseguimientol.php';
include_once '../../modelo/mdlescape.php';
include_once 'header.php'; 
?>


<div class="container-fluid">
<div class="row">
 
<div class="col-sm-2 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>

</div>

<?php

$objeto= new Seguimiento;
$res=$objeto->listarse2();

$objeto3= new Escap;
?>

                   
      			 
<div class="col-sm-10 col-md-10">

  <h3>Acciones realizadas</h3>

  <hr>  

  <form action="seguimientousuf.php" method="post" >

    <tr>
      <td> Mostrar por fecha: </td>
      <input align="center" type="date" name="fecha">  
      <button type="submit" name="boton">Mostrar</button>
    </tr> 

  </form>

  <hr style="border-top: 1px double #797979;"> 

  <div class="table-responsive">
                      
      <table class="table table-hover table-striped" align="center">
      			         
      <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Usuario</td>                     
      <td class="col-sm-10 col-md-10" align="center" style="font-family:Tahoma, Geneva, sans-serif">Acciones</td>
      <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                          
      <?php                    
    	while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
      ?>

      <tr style="font-size:12px">
      <td align="center"><?php echo $objeto3->escape($row['usuario'])?></td>
      <td align="center"><?php echo $objeto3->escape($row['descripcion'])?></td>
      <td style="color: #369" align="center"><?php echo $objeto3->escape($row['fecha'])?></td>                                               
                                                               
      <?php } $objeto->CloseDB();?>
      </table>

  </div>
               
</div>
         
</div>
</div>

 
</body>
</html>

  