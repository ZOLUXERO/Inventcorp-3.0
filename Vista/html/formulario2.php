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


<!-- cambio prueba a github -->
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
  <li><a href="formulario1.php">Text /Button - Triangulo</a></li>
  <li class="active"><a href="formulario2.php">Radio - Edades</a></li>
  <li><a href="formulario3.php">Check - Ingredientes</a></li>
  <li><a href="formulario4.php">Select - Paises</a></li>
  </ul></p>
			  
			   <!-- Contenedor ejercicio-->
              <div class="alert alert-success">
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
			   <form name="areat" action="../../controlador/ejercicio1.php" method="post">
			   <table class="table">
			   <tr><td colspan="2" style="color:#000000">Confeccionar un formulario que solicite la carga de un nombre de persona y su edad mediante 3 radio buton (9, 17,28), luego mostrar si es mayor de edad en un text (si la edad es mayor o igual a 18).</td></tr>
			   <tr><td align="right"><input name="base" type="radio" value="9"> 9</td></tr>
			   <tr><td align="right"><input name="base" type="radio" value="17"> 17</td></tr>
               <tr><td align="right"><input name="base" type="radio" value="28"> 28</td></tr>
			   <tr><td colspan="2" align="center"><input value="VERIFICAR" type="submit" name="submit"width="500" style="color:#000000"></td></tr>
			   <tr><td align="right">Mator de edad?</td><td><input name="area" type="text" value="<?php if (isset($_REQUEST['dato']))  /* pregunta si la variable tiene un dato asignado */ {  echo $_REQUEST['dato'];  }?>" disabled="disabled"></td></tr>
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
