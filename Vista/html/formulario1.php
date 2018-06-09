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

<?php /*if(isset($_POST['submit'])) 
{ 
$d1 = $_REQUEST['base'];
$d2 = $_REQUEST['altura'];
$d3=($d1*$d2)/2;
 }*/
?>
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
   <p style="color:#DCA430">Ejercicios de uso de formularios (Text - Radio - Check - Select) y su tratamiento con PHP. $_REQUEST - $_POST - $_GET </p>
    <!-- contenedor menu de ejercicios-->
   <p><ul class="nav nav-tabs">
   <li class="active"><a href="formulario1.php">Text /Button - Triangulo</a></li>
  <li><a href="formulario2.php">Radio - Edades</a></li>
  <li><a href="formulario3.php">Check - Ingredientes</a></li>
  <li><a href="formulario4.php">Select - Paises</a></li>
  </ul></p>
			  
			   <!-- Contenedor ejercicio-->
              <div class="alert alert-success">
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
			   <form name="areat" action="../../controlador/ejercicio1.php" method="post">
			   <table class="table">
			   <tr><td colspan="2" style="color:#000000">Ejercicio Area triangulo: Digite los datos y al oprimir el boton, se realicen los calculos</td></tr>
			   <tr><td align="right">Base</td><td><input name="base" type="text" value="<?php if (isset($d1))  /* pregunta si la variable tiene un dato asignado */ {  echo $d1;  }?>"></td></tr>
			   <tr><td align="right">Altura</td><td><input name="altura" type="text" value="<?php if (isset($d2))  /* pregunta si la variable tiene un dato asignado */ {  echo $d2;  }?>"></td></tr>
			   <tr><td colspan="2" align="center"><input value="CALCULAR" type="submit" name="submit"width="500" style="color:#000000"></td></tr>
			   <tr><td align="right">Resultado Area</td><td><input name="area" type="text" value="<?php if (isset($d3))  /* pregunta si la variable tiene un dato asignado */ {  echo $d3;  }?>" disabled="disabled"></td></tr>
			   </table>
			   </form>
			   </div>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
   </div>
   </div>



</body>
</html>
