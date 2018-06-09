<?php
/*ESTA PAGINA ESTA DESACTIVADA!!!



<!DOCTYPE html>
<html lang="en">
<?php
//esta pagina esta desactivada
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
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">INVENTCORP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Acerca de nosotros</a></li>
      <li><a href="#">Contactenos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'controlador/salir.php';} else { echo $ruta.'seguridaddb.php';}?>"><span class="glyphicon glyphicon-log-out"></span> <?php if(isset($_SESSION["session"])){ echo "Salir";} else{echo "Logueo";}?></a></li>
     
     <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){}else { echo $ruta.'registro.php';}?>"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION["session"])){ echo $_SESSION["session"];} else{echo "Registro";}?></a></li>
      

    </ul>
  </div>
</nav>


  
</div>
</body>
</html>  
<?php  
 //Inicio la sesión  

if ($_SESSION["validar"]!="true") {  //COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
    //si no existe, envio a la página de autentificacion      
header("Location: index.php");  
    //ademas salgo de este script      
exit();  
}  

?> 


<?php
$dt="";

/*if (session_status() !== PHP_SESSION_ACTIVE) 
{
    session_start();
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>INVENTCORP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vista/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="vista/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">



<?php include_once 'vista/html/slideshow.php'; ?><br>


<div class="container">
      <div class="row">
       <div class="col-md-2 column margintop20"> 
<ul class="nav nav-pills nav-stacked"> 
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-list"></span> Inicio</a></li>
      <li><a href="vista/html/usuarios/crudusuarios.php">Bd Usuarios<span class="glyphicon glyphicon-user pull-right"></span> </a></li>
      <li><a href="vista/html/usuarios/crudproveedores.php">Inventarios<span class="glyphicon glyphicon-globe pull-right"></span> </a></li>
      <li><a href="#">Bd Productos<span class="glyphicon glyphicon-shopping-cart pull-right"></span> </a></li>
      <li><a href="#">Bd Mantenimiento<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
      <li><a href="#">Bd Material<span class="glyphicon glyphicon-chevron-right pull-right"></span> </a></li>
      </ul>

		  </div>		
        <div class="col-sm-10 col-md-10">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Bienvenido a InventCorp</h3>
            </div>
            <div class="panel-body">
              <p>Páginas de inventarios, con programacion orientada a objetos, esta página fue hecha en lenguaje de programación PHP, HTML, CSS, SQL lo invitamos a explorar la pagina!</p><br>
              <div class="alert alert-success">
			   <div class="row">
			   	<div class="col-md-3" align="center"> <span><img src="Vista/imagenes/css.png" width="100" width="100"></span></div>
			    <div class="col-md-3" align="center"> <span><img src="Vista/imagenes/sql.png" width="100" width="100"></span></div>
			    <div class="col-md-3" align="center"> <span><img src="Vista/imagenes/html.png" width="130" width="130"></span></div>
				<div class="col-md-3" align="center"> <span><img src="Vista/imagenes/php.png" width="110" width="110"></span></div>
			</div>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
         
      
</div>

</body>
</html>