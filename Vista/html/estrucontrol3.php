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
   <p style="color:#DCA430">Ejercicios para practicas estructuras Condicionales, repetitivas</p>
    <!-- contenedor menu de ejercicios-->
   <p><ul class="nav nav-tabs">
  <li><a href="estrucontrol1.php">Estructuras If - Else</a></li>
  <li><a href="estrucontrol2.php">Estructura While</a></li>
  <li class="active"><a href="#">Estructura for</a></li>
  </ul></p>
			  
			   <!-- Contenedor ejercicio-->
              <div class="alert alert-success">
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
			   <form name="areat" action="../../controlador/ejercicio1.php">
			   <table class="table">
			   <tr><td colspan="2" style="color:#000000">Digitar en un text un numero que tendra funcion de limite inferior y en otro text otro número que hará de limite superior. Calcular la sumatoria de los pares y de los impares y mostrar resultados en text distintos.</td></tr>
			   <tr><td align="right">Límite inferior</td><td><input name="sueldo" type="text"></td></tr>
			   <tr><td align="right">Límite superior</td><td><input name="altura" type="text" value="<?php if (isset($_REQUEST['area']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>"></td></tr>
                <tr><td align="right">Sumatoria Pares</td><td><input name="altura" type="text" value="<?php if (isset($_REQUEST['area']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>" disabled="disabled"></td></tr>
                <tr><td align="right">Sumatoria impares</td><td><input name="altura" type="text" value="<?php if (isset($_REQUEST['area']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>" disabled="disabled"></td></tr>
			   <tr><td colspan="2" align="center"><input value="CALCULAR" type="submit" width="500" style="color:#000000"></td></tr>
			   
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
