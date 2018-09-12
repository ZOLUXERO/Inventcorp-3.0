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
include_once '../../modelo/mdlseguimientol2.php';
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
