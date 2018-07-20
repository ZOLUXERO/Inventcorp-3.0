<html lang="en">

<head>
<?php //include_once '../../../controlador/control.php' ?>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../vista/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../vista/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">INVENTCORP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Acerca de nosotros</a></li>
      <li><a href="#">Contactenos</a></li>
      <li><a href="#">Mostrar tablas db</a></li>
    </ul>
   

    </ul>
  </div>
</nav>




<div class="container-fluid">
<div class="row">
<div class="col-sm-3 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<ul class="nav nav-pills nav-stacked"> 
<li class="active"><a href="../../../index.php"><span class="glyphicon glyphicon-list"></span> Inicio</a></li>
<li><a href="../usuarios/crudusuarios.php">Buscar Usuarios<span class="glyphicon glyphicon-user pull-right"></span> </a></li>
<li><a href="#">Productos<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="../categorias/crudcategorias.php">Categorias<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">Clientes<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="../listar/crudlistar.php">proveedores<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
</ul>

</div>



<div class="col-sm-7 col-md-7">
<div class="panel panel-default">

<!-- contenedor del titulo-->

<div class="panel-heading">
<h3 class="panel-title">BASE DE DATOS USUARIOS</h3>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->


<div class="container" style="width: 800px;" align="right">
<?php
include_once 'index.html'; 
?>
<br/ ><br /><br/ >
</div>


              
 </div>


<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">BASE</h3>
</div>

<br /><br />

</div>
</div>

<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">BASE</h3>
</div>

<br /><br />

</div>
</div>

<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">BASE</h3>
</div>

<br /><br />

</div>
</div>


</div>



     

</div>
</div>

    </body>
</html>
