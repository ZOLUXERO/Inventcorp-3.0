<!DOCTYPE html>
<html lang="en">
<?php

$dt="";

if (session_status() !== PHP_SESSION_ACTIVE) 
{
	session_start();
}


$archivo = basename($_SERVER['PHP_SELF']);
if ($archivo=="index.php")
{
	$ruta="vista/html/";
}
else
{
	$ruta="";
}
?>

<head>
  <title>Mi Proyecto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <script src="../bootstrap/js/bootstrap.min.js"></script>

 
</head>
<body>

<div class="navbar-wrapper">
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $ruta;?>../../index.php">INVENTCORP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo $ruta;?>../../index.php">Home</a></li>
      <li><a href="#">Acerca de nosotros</a></li>
      <li><a href="#">Contactenos</a></li>
      <li ><a href="<?php echo $ruta;?>usuarios/crudusuarios.php">CRUD USUARIOS</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../controlador/salir.php';} else { echo $ruta.'seguridaddb.php';}?>"><span class="glyphicon glyphicon-log-out"></span> <?php if(isset($_SESSION["session"])){ echo "Salir";} else{echo "Logueo";}?></a></li>
     
     <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){}else { echo $ruta.'registro.php';}?>"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION["session"])){ echo $_SESSION["session"];} else{echo "Registro";}?></a></li>
      

    </ul>
  </div>
</nav>


  
</div>
</div>



</body>
</html>  
