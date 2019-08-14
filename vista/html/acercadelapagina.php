<!DOCTYPE html>
<html>
<head>

<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">

<?php

include_once 'header.php'; 

?>

</div>
<div class="container">
  
<?php

if(isset($_REQUEST['visitante'])){
 echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."USTED ESTA INHABILITADO DE LAS FUNCIONALIDADES DEL SISTEMA PARA CAMBIAR ESTO PONGASE EN CONTACTO CON UNADMINISTRADOR DE LA PAGINA."."</div>"; 
 }

?>

</div>
<div class="container marketing">

        <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Acerca de la pagina. <span class="text-muted">¿funcionalidades?</span></h2>
          <p class="lead">Si presiona el boton de PRUEBA entrara al sistema sin restriccion alguna esto con el fin de que pueda ver el sistema en funcionamiento, si desea registrarse tambien puede hacerlo pero entrara como visitante hasta que un administrador le de los respectivos permisos. Debido a que el proyecto ya se termino es poco probable que un administrador entre a darle permisos por esto el boton de prueba.</p>
        </div>
        <div class="col-md-5">
           <img class="featurette-image img-responsive center-block" src="../imagenes/c5.png" width="250" alt="Generic placeholder image">
        </div>
      </div>

      <hr style="border-top: 1px double #797979;">     

      <div class="row featurette">
        <div class="col-md-5">
         <img class="featurette-image img-responsive center-block" src="../imagenes/c5.png" width="250" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Tour Rapido <span class="text-muted"> Graficas!</span></h2>
          <p class="lead">Si desea ver de que trata esta pagina de forma rapida lo invito a que presione Prueba, en el menu que le aparecera a la izquierda presione productos y de seguimiento en el producto que desee.</p>
        </div>

      </div>

      <hr style="border-top: 1px double #797979;">

      <div class="row featurette">
        <div class="col-md-7 ">
          <h2 class="featurette-heading">Acerca de nosotros. <span class="text-muted">¿Quiénes somos?</span></h2>
          <p class="lead">Somos un grupo de estudiantes del Sena que está cursando análisis y desarrollo de sistemas de información. Trabajamos continuamente en esta página para darle vida a este proyecto que tiene como objetivo brindar un software orientado a la web que sea seguro y eficiente. !</p>
        </div>
        <div class="col-md-5 ">
         <img class="featurette-image img-responsive center-block" src="../imagenes/c5.png" width="250" alt="Generic placeholder image">


        </div>
      </div>

      <hr style="border-top: 1px double #797979;">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../imagenes/c5.png" width="250" alt="Generic placeholder image">
        </div>        
        <div class="col-md-7">
          <h2 class="featurette-heading">Automatízate con Inventcorp <span class="text-muted">Software de inventario.</span></h2>
          <p class="lead">Maneje su inventario de una manera mucho mas sencilla, deje de complicarse y regístrese gratis.</p>
        </div>

      </div>
     

      <hr style="border-top: 1px double #797979;">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
     

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="pull-right"><a href="#">Volver arriba</a></p>
          <p>Página hecha por <a href="../../codigosNN/paginainvent/BORRAR.php">Inventcorp</a>, by <a href="#">Adsi</a>.</p>
        </div>
      </footer>
    </div>

</body>
</html>