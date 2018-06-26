<?php
session_start();
if (!empty($_SESSION["session"]))
{
  header("Location:../../index.php");
  exit();
}
?>
<!--  ejemplo para control de versiones   -->

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
        
   <?php //include_once 'menulateral.php'; ?>
				
  <div class="container">
 <div class="jumbotron">
        <h1 align="center">¡Registrese aqui!</h1>
        <p class="lead" align="center">Formulario de registro.</p>

   <form name="areat" action="../../controlador/controler1.php" method="post">
         <table class="" style="" align="center" width="400">
      
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Usuario / Email</td><td>
  <input class="form-control input-sm" type="email" name="usu" class="form-control" placeholder="Correo electrónico" required>
</td></tr>
<tr><td style="padding:2px"></td></tr>
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Nombre</td><td>
  <input class="form-control input-sm" type="text" name="nom" class="form-control" placeholder="Nombre" required>
</td></tr>
<tr><td style="padding:2px"></td></tr>
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Cédula</td><td>
  <input class="form-control input-sm" type="text" name="ape" class="form-control" placeholder="Cédula" required>
</td></tr>
<tr><td style="padding:2px"></td></tr>
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Teléfono</td><td>
  <input class="form-control input-sm" type="text" name="numb" class="form-control" placeholder="Teléfono" required>
</td></tr>

<tr><td style="padding:2px"></td></tr>
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Contraseña</td><td>
  <input class="form-control input-sm" type="password" name="pass" class="form-control" placeholder="Contraseña" required>
</td></tr>
<tr><td style="padding:4px"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td align="center" colspan="2"><input type="submit" class="btn btn-lg btn-success" name="registrar" style="width:400px" value="REGISTRAR"></td></tr>
<tr><td style="padding:4px"></td></tr>
<tr><?PHP if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'><div class='alert alert-success'>"."REGISTRO CORRECTO"."</div>";} if(isset($_REQUEST['dato1'])){ echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."USUARIO YA SE ENCUENTRA EN EL SISTEMA"."</div>"; }?></td></tr>
        
         </table>
         </form>
    
   
 </div>
</div>
 
</body>
</html>
