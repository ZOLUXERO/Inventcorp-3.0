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

<div class="col-sm-3 col-md-3">


<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">HISTORIA OSERVACIONES</h3>
</div>

</div>


</div>
         
</div>
</div>

 
</body>
</html>