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
  <li><a href="#">Vectores</a></li>
  <li class="active"><a href="estrucontrol2.php">Matrices</a></li>
  <!--<li><a href="estrucontrol3.php">Estructura for</a></li>-->
  </ul></p>
			  
			   <!-- Contenedor ejercicio-->
              <div class="alert alert-success">
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
			   <form name="areat" action="../../controlador/ejercicio1.php">
			   <table class="table">
			   <tr><td style="color:#000000">Crear y llenar una matriz 3 x 3 e imprimir la suma de su contenido</td></tr></table>

<table align="center">
 <tr><td colspan="3" align="center">Valores de la Matriz</td></tr>
 <tr><td><input name="v1" type="text" placeholder="dato 1" size="5"></td><td><input name="v2" type="text" placeholder="dato 2" size="5"></td><td><input name="v3" type="text" placeholder="dato 3" size="5"></td></tr>
 <tr><td><input name="v4" type="text" placeholder="dato 4" size="5"></td><td><input name="v5" type="text" placeholder="dato 5" size="5"></td><td><input name="v6" type="text" placeholder="dato 6" size="5"></td></tr>
 <tr><td><input name="v4" type="text" placeholder="dato 7" size="5"></td><td><input name="v5" type="text" placeholder="dato 8" size="5"></td><td><input name="v6" type="text" placeholder="dato 9" size="5"></td></tr></table>
 
 <table align="center">
 
 <tr><td>Acumulado Total: </td>&nbsp;<td><input name="altura" type="text" value="<?php if (isset($_REQUEST['area']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>" disabled="disabled"> </td></tr>
 <tr><td colspan="2"><hr></td></tr>
 <tr align="center"><td colspan="2"><input value="CALCULAR" type="submit" width="500" style="color:#000000"></td></tr>
 
			   
			   
			   </table>

</div>


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
