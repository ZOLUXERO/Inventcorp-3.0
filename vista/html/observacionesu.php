<?php 
include_once '../../controlador/control.php'; 
include_once '../../controlador/controladminusu.php';
include_once '../../modelo/mdlobservacionl.php';
include_once '../../modelo/mdlescape.php';
include_once 'header.php'; 
?>

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




<div class="container-fluid">
<div class="row">
 
<div class="col-sm-2 col-md-2 sidebar">
<?php
include_once 'menulateral.php'; 
?>
</div>



<div class="col-sm-4 col-md-4">

  <h3>Ingreso de observaciones:</h3>    

  <div class="navbar-form navbar-default">

    <hr style="border-top: 1px double #797979;">
    <form method="post" action="../../controlador/controlobservacion.php"> 
      <textarea name="des" rows="5" cols="50" maxlength="200" wrap="hard">
</textarea>
      <br>
      <button type="submit" name="guardar">Enviar</button>
    </form>  
    <hr style="border-top: 1px double #797979;">  

  </div>

      
</div>    





<div class="col-sm-4 col-md-4">




<h3>OBSERVACIONES HECHAS</h3>
<hr style="border-top: 1px double #797979;">  

<table class="table table-hover table-striped"  align="center">

  <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Id observación</td> 
  <td class="col-sm-5 col-md-5" align="center" style="font-family:Tahoma, Geneva, sans-serif">Descripción</td>                    
  <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                    
<?php                      

    $objeto= new Observl;
    $objeto2= new Escap;
    $res=$objeto->listar($objeto2->escape($_SESSION['doc']));

    if($res->num_rows == 0)
    { 
    echo "<div align='center' class='alert alert-warning'>USTED NO HA HECHO NINGUNA OBSERVACION</div>";
    }


    while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
          ?>
            <tr style="font-size:16px">
            <td align="center"><?php echo $objeto2->escape($row['id_observacion']);?></td>
            <td align="left"><?php echo $objeto2->escape($row['desc_obeservacion']);?></td>
            <td style="color: #369" align="center"><?php echo $objeto2->escape($row['fecha_observacion']);?></td>
                                 
                             
            </tr>  

    <?php } $objeto->CloseDB();
?>         
                 
                     
</table>


</div>

         
</div>
</div>

 
</body>
</html>