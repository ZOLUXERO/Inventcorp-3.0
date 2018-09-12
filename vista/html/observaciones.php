<?php 

include_once '../../controlador/control.php'; 
include_once '../../controlador/controladmin.php';
include_once '../../modelo/mdlobservacionl2.php';
include_once '../../modelo/mdlobservacionl.php';
include_once '../../modelo/mdlescape.php';
include_once 'header.php'; 

if (!isset($_GET['hola']) && !isset($_GET['fecha']) && !isset($_GET['usuario'])  && !isset($_GET['todos'])) {
  header('location: crudproductos.php');
}

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



<div class="col-sm-6 col-md-6">

<!-- por fecha -->

<?php if (isset($_GET['fecha'])):?>

   <h3>El dia: <?php echo $_REQUEST["fec"];?></h3>    

  <div class="navbar-form navbar-default">
  <hr style="border-top: 1px double #797979;">   
  <table class="table table-hover table-striped"  align="center">
  <td align="left" style="font-family:Tahoma, Geneva, sans-serif">Observacion</td> 
  <td class="col-sm-7 col-md-7" align="center" style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>                    
  <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                    
    <?php                      

    $objeto= new Observl;
    $objeto2= new Escap;
    $res=$objeto->listarr($objeto2->escape($_REQUEST["fec"]));

    if($res->num_rows == 0)
    { 
    echo "<div align='center' class='alert alert-warning'>NO HAY RESULTADOS CON ESE CRITERIO DE BUSQUEDA</div>";
    }

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

<?php endif ?> 

<!-- por ususario -->

<?php if (isset($_GET['usuario'])):?>

   <h3>Por usuario: <?php echo $_REQUEST["docu"];?></h3>    

  <div class="navbar-form navbar-default">
  <hr style="border-top: 1px double #797979;">   
  <table class="table table-hover table-striped"  align="center">
  <td align="left" style="font-family:Tahoma, Geneva, sans-serif">Observacion</td> 
  <td class="col-sm-7 col-md-7" align="center" style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>                    
  <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                    
    <?php                      

    $objeto= new Observl;
    $objeto2= new Escap;
    $res=$objeto->listar($objeto2->escape($_REQUEST["docu"]));

    if($res->num_rows == 0)
    { 
    echo "<div align='center' class='alert alert-warning'>NO HAY RESULTADOS CON ESE CRITERIO DE BUSQUEDA</div>";
    }

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

 <?php endif ?> 

<!-- normal -->
<?php if (isset($_GET['hola'])):?>

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
 <?php endif ?> 
  

<!-- todos -->
<?php if (isset($_GET['todos'])):?>
  <h3>Todas las observaciones:</h3>    

  <div class="navbar-form navbar-default">
  <hr style="border-top: 1px double #797979;">   
  <table class="table table-hover table-striped"  align="center">
  <td align="left" style="font-family:Tahoma, Geneva, sans-serif">Observacion</td> 
  <td class="col-sm-7 col-md-7" align="center" style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>                    
  <td align="center" style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                    
    <?php                      

    $objeto= new Observl2;
    $objeto2= new Escap;
    $res=$objeto->listar3();

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

 <?php endif ?>  

</div>    

<div class="col-sm-3 col-md-3">


<h3 class="panel-title">Buscar por usuario:</h3>

<table >



<tr>
  <td>
    <form method="post" action="observaciones.php?usuario=01">
      <input type="text" name="docu" placeholder="Documento">
      <button>Buscar</button>
    </form>
  </td>
</tr>


</table>

<br>

<h3 class="panel-title">Buscar por fecha:</h3>

<table >



<tr>
  <td>
    <form method="post" action="observaciones.php?fecha=02">
      <input type="date" name="fec" placeholder="Documento">
      <button>Buscar</button>
    </form>
  </td>
</tr>


</table>
<br>

<a href="observaciones.php?todos">[Mostrar todos]</a>

</div>



 

         
</div>
</div>

 
</body>
</html>
