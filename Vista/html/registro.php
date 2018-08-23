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


 <div class="jumbotron">
        <h1 align="center">¡Regístrese aquí!</h1>
        <p class="lead" align="center">Formulario de registro.</p>

   <form name="areat" action="../../controlador/controler1.php" method="post">
         <table class="" style="" align="center" width="400">
      
<div class="form-group">

         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Correo Electrónico</td><td>
  <input class="form-control input-sm" type="email" name="usu" class="form-control" placeholder="Registre su correo electrónico" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Ingrese una direccion de email válida">
</td></tr>
</div>

<div class="form-group">

<tr><td style="padding:2px"></td></tr>
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Primer Nombre</td><td>
  <input class="form-control input-sm" type="text" name="nom1" class="form-control" placeholder="Primer Nombre" required>
</td></tr>
</div>

<div class="form-group">

<tr><td style="padding:2px"></td></tr>
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Segundo Nombre</td><td>
  <input class="form-control input-sm" type="text" name="nom2" class="form-control" placeholder="Segundo Nombre" required>
</td></tr>
</div>

<div class="form-group">

<tr><td style="padding:2px"></td></tr>
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Primer Apellido</td><td>
  <input class="form-control input-sm" type="text" name="nom3" class="form-control" placeholder="Primer Apellido" required>
</td></tr>
</div>

<div class="form-group">

<tr><td style="padding:2px"></td></tr>
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Segundo Apellido</td><td>
  <input class="form-control input-sm" type="text" name="nom4" class="form-control" placeholder="Segundo Apellido" required>
</td></tr>
</div>

<div class="form-group">

<tr><td style="padding:2px"></td></tr>
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Documento</td><td>
  <input class="form-control input-sm" type="text" name="ape" class="form-control" placeholder="Documento" required>
</td></tr>
</div>

<div class="form-group">

<tr><td  style="font-family:Tahoma, Geneva, sans-serif">Tipo de documento</td>
  <td>
         <select class="form-control input-sm" name="tdo" required>
         <option value="CC">C.C. (Cédula de Ciudadanía)</option>
         <option value="CE">C.E. (Cédula de Extranjería)</option>
         <option value="NIT">NIT  (Número Identificación Tributaria)</option>
         <option value="TI">T.I. (Tarjeta de Identidad)</option>
         <option value="PP">PP   (Pasaporte)</option>
         <option value="IDC">IDC  (Identificador Único de Cliente)</option>
         <option value="CEL">CEL  (Número Móvil)</option>
         <option value="RC">R.C. (Registro Civil)</option>
         <option value="DE">D.E. (Documento de Identificación Extranjero)</option>
         </select>
   </td>
</tr>
</div>

<div class="form-group">


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Teléfono</td><td>
  <input class="form-control input-sm" type="text" name="numb" class="form-control" placeholder="Teléfono" required>
</td></tr>
</div>

<div class="form-group">

<tr><td style="padding:2px"></td></tr>
         <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Contraseña</td><td>
  <input class="form-control input-sm" type="password" name="pass" class="form-control" placeholder="Contraseña" required>
</td></tr>
</div>


<tr><td style="padding:4px"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td align="center" colspan="2"><input type="submit" class="btn btn-lg btn-success" name="registrar" style="width:400px" value="REGISTRAR"></td></tr>
<tr><td style="padding:4px"></td></tr>
<tr><?PHP if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'><div class='alert alert-success'>"."REGISTRO CORRECTO"."</div>";} if(isset($_REQUEST['dato1'])){ echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."USUARIO YA SE ENCUENTRA EN EL SISTEMA"."</div>"; }?></td></tr>
        


         </table>
         </form>
    
   
 </div>

</body>
</html>
