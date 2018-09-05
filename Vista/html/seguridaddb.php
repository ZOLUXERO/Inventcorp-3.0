
<?php
session_start();
if (!empty($_SESSION["session"]))
{
	header("Location:../../index.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>INVENTCORP</title>
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
</div>
  <div class="container">
  <div class="jumbotron">
        <h1 align="center">Inicie sesión</h1>
        <p class="lead" align="center">Formulario de inicio.</p>

          <form name="areat" action="../../controlador/controler1.php" method="post">
           <table class="" style="" align="center">
           
           <tr><td style="padding:5px"></td></tr>
           <tr><td><div class="input-group input-group-sm">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="usu" class="form-control" placeholder="Correo electrónico" >
            </div></td></tr>
            <tr><td style="padding:2px"></td></tr>
            <tr><td><div class="input-group input-group-sm">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" name="pass" class="form-control" placeholder="Contraseña" >
            </div></td></tr>
            <tr><td style="padding:4px"></td></tr>
            <tr><td align="center"><input class="btn btn-lg btn-success" type="submit" name="enviar" class="" width="300px" value="Iniciar"></td></td>

            <tr><td style="padding:4px"></td></tr>
            <tr><td style="color:#F00"><?php if(isset($_REQUEST['error'])) { echo "Usuario o contraseña incorrecta!";}?><?php if(isset($_REQUEST['errorsi2'])) { echo "Usuario inhabilitado de la pagina";}?></td></tr>              
                      
           </table>
           </form>
    



 </div>
</div>
 



</body>
</html>
