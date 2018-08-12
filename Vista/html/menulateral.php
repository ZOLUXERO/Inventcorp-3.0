

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

  <ul class="nav nav-pills nav-stacked panel panel-default"> 
      <li class="active"><a href="../../index.php"><span class="glyphicon glyphicon-list"></span> Inicio</a></li>
      <li>
          <?php if ($_SESSION["idrol"] == 1): ?>
              <a href="seguimientousu.php">Seguimiento usuarios<span class="glyphicon glyphicon-sunglasses pull-right"> </span></a>            
          <?php else: ?>
                     
          <?php endif ?>        
      </li>
      <li><a href="crudproductos.php">Productos<span class="glyphicon glyphicon-menu-hamburger pull-right"></span> </a></li>
      <li><a href="crudcategoria.php">Categorias<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
      <li><a href="crudcliente.php">Clientes<span class="glyphicon glyphicon-briefcase pull-right"></span> </a></li>
      <li><a href="crudproveedor.php">proveedores<span class="glyphicon glyphicon-book pull-right"></span> </a></li>
      <li>
          <?php if ($_SESSION["idrol"] == 1): ?>
              <a href="admon.php">Usuarios en la pagina<span class="glyphicon glyphicon-user pull-right"> </span></a>            
          <?php else: ?>
                     
          <?php endif ?>        
      </li>
      <li>
        <?php if ($_SESSION["idrol"] == 1): ?>
              <a href="objetoelm.php">Objetos eliminados<span class="glyphicon glyphicon-trash pull-right"></span> </a>             
        <?php else: ?>
                  
        <?php endif ?>   
        
      </li>
  </ul>

</body>
</html>  
