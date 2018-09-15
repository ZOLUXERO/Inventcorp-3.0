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


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">



      <a class="navbar-brand" href="<?php echo $ruta;?>../../index.php">NOMBREDEPAGINA</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="<?php echo $ruta;?>../../index.php">Home</a></li>
      <li><a href="<?php echo $ruta;?>acercadelapagina.php">Acerca de la pagina</a></li>
      <li><a href="#">Contáctenos</a></li>
      <li >
        <?php if(isset($_SESSION["session"])): ?> 
            <?php if ($_SESSION["idrol"] == 3): ?>
                                       
            <?php else: ?>
                     <a href="<?php echo $ruta;?>crudproductos.php">Manejo de inventario</a></li>
            <?php endif ?>
            
        <?php else: ?>
          
        <?php endif ?>
        
      <li>


        <?php if(isset($_SESSION["session"])): ?> 
            <?php if ($_SESSION["idrol"] == 1): ?>
                      <a href="<?php echo $ruta;?>admon.php">Usuarios en la página</a>                  
            <?php elseif($_SESSION["idrol"] == 2): ?>
                      
            <?php elseif($_SESSION["idrol"] == 3): ?>
                      
            <?php endif ?>
        <?php else: ?>
          
        <?php endif ?>
 

      </li>
    </ul>
    




    <ul class="nav navbar-nav navbar-right">
      <li class="pull-right">
        <a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../controlador/salir.php';} else { echo $ruta.'seguridaddb.php';}?>">
          <span class="glyphicon glyphicon-log-out">            
          </span>
          <?php if(isset($_SESSION["session"])){ echo "Salir";} else{echo "Logueo";}?>
        </a>
      </li>
     
     <li class="pull-right">
      <a href="<?php if(isset($_SESSION['session'])){}else { echo $ruta.'registro.php';}?>">
        <span class="glyphicon glyphicon-user">         
        </span>
       <?php if(isset($_SESSION["session"])){ echo $_SESSION["session"];} else{echo "Registro";}?>
      </a>
    </li>
      

    </ul>



  </div>
</nav>
<!--
<?php
//echo $_SESSION["doc"];
?>
  
<?php
//echo $_SESSION["idrol"];
?>
-->

</body>
</html>  
