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
 
<div class="col-sm-2 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>

</div>

             
      			 

         
</div>
</div>

 
</body>
</html>
