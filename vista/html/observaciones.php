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
include_once '../../modelo/mdlobservacionl2.php';
include_once '../../modelo/mdlescape.php';
include_once 'header.php'; 

?>


<div class="container-fluid">
<div class="row">
 
<div class="col-sm-2 col-md-2 sidebar">
<?php
include_once 'menulateral.php'; 
?>
</div>



<div class="col-sm-6 col-md-6">

  <h3>El dia de hoy:</h3>    

  <div class="navbar-form navbar-default">
  <hr style="border-top: 1px double #797979;">   
  <table class="table table-hover table-striped"  align="center">
  <td align="left" style="font-family:Tahoma, Geneva, sans-serif">Observacion</td> 
  <td class="col-sm-7 col-md-7" align="center" style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>                    
  <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                    
    <?php                      

    $objeto= new Observl2;
    $objeto2= new Escap;
    $res=$objeto->listar2();

    while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
          ?>
            <tr style="font-size:16px">
            <td align="left">id:<?php echo $objeto2->escape($row['id_observacion']);?><br>
            <?php echo $objeto2->escape($row['usuario_observacion']);?>               
            </td>
            <td align="left"><?php echo $objeto2->escape($row['desc_obeservacion']);?></td>
            <td style="color: #369" align="center"><?php echo $objeto2->escape($row['fecha_observacion']);?></td>
                                 
                             
            </tr>  

    <?php } $objeto->CloseDB();
  ?>         
  </table>
  <hr style="border-top: 1px double #797979;">   
  </div>

      
</div>    

<div class="col-sm-3 col-md-3">


<h3 class="panel-title">Buscar por usuario:</h3>

<table >



<tr>
  <td>
    <form method="post" action="../../controlador/controlobservacion.php">
      <input type="text" name="" placeholder="Documento o nombre">
      <button>Buscar</button>
    </form>
  </td>
</tr>


</table>

</div>



 

         
</div>
</div>

 
</body>
</html>
