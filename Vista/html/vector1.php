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


<div class="container">
<header>
<?php include_once 'header.php'; ?>
</header>

      <div class="container">
      <div class="row">
        
<?php include_once 'menulateral.php'; ?>	
				
  <div class="col-sm-10 col-md-10">
   <div class="panel panel-default">
   <!-- contenedor del titulo-->
   <div class="panel-heading">
    <h3 class="panel-title">EJERCICIOS DE PRACTICA PHP</h3>
   </div>
    <!-- contenedor de descripcion ejercicios-->
   <div class="panel-body">
   <p style="color:#DCA430">Ejercicios para practicas de vectores y Matrices</p>
    <!-- contenedor menu de ejercicios-->
   <p><ul class="nav nav-tabs">
  <li class="active"><a href="#">Vectores</a></li>
  <li><a href="estrucontrol2.php">Matrices</a></li>
  <!--<li><a href="estrucontrol3.php">Estructura for</a></li>-->
  </ul></p>
			  
			   <!-- Contenedor ejercicio-->
              <div class="alert alert-success">
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
			   <form name="areat" action="../../controlador/ejercicio1.php">
			   <table class="table">
			   <tr><td colspan="2" style="color:#000000">Desarrollar un programa que permita ingresar un vector de 6 elementos, e informe: 1). El valor acumulado de todos los elementos del vector. 2). El valor acumulado de los elementos del vector que sean mayores a 36. 3).Cantidad de valores mayores a 50.
</td></tr>
			   <tr><td align="right">Valores del vector</td><td><input name="v1" type="text" placeholder="dato 1">&nbsp;<input name="v2" type="text" placeholder="dato 2">&nbsp;<input name="v3" type="text" placeholder="dato 3"></td></tr>
               <tr><td align="right"></td><td><input name="v4" type="text" placeholder="dato 4">&nbsp;<input name="v5" type="text" placeholder="dato 5">&nbsp;<input name="v6" type="text" placeholder="dato 6"></td></tr>
               
			   <tr><td align="right">Acumulado Total</td><td><input name="altura" type="text" value="<?php if (isset($_REQUEST['area']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>" disabled="disabled"> </td></tr>
               <tr><td align="right">Acumulado Mayores a 36</td><td><input name="altura" type="text" value="<?php if (isset($_REQUEST['area']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>" disabled="disabled">&nbsp;<input value="CALCULAR" type="submit" width="500" style="color:#000000"> </td></tr>
               <tr><td align="right">Cantidad valores >50</td><td><input name="altura" type="text" value="<?php if (isset($_REQUEST['area']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>" disabled="disabled"> </td></tr>
			   <tr><td colspan="2" align="center"></td></tr>
			   
			   </table>
			   </form>
			   </div>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
      
</div>

</body>
</html>
