<?php 
include_once '../../controlador/control.php'; 
include_once '../../controlador/controladminusu.php';
include_once '../../modelo/mdlusuobtener.php';
require '../../modelo/mdlescape.php';



?>

<html lang="en">

<head>

<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../vista/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../vista/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<?php 
include_once 'header.php'; 
?>



<div class="container-fluid">
<div class="row">

<div class="col-sm-2 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>




</div>




<div class="col-sm-10 col-md-10">
<h3>Perfil del usuario</h3>
<hr style="border-top: 1px double #797979;"> 
<br>
<div class="table-responsive">
                      
<table class="table table-hover table-striped" style="font-size: 14px" >
<?php

$objeto= new Usuarioo;
$res=$objeto->obtenerusuarios($_SESSION['doc']);

$objeto2= new Escap;

while($row = $res->fetch_array(MYSQLI_ASSOC)){ 

?>  

  <tr>
    <td>Nombre:</td>
    <td><?php echo $objeto2->escape($row['primer_nombre']." ".$row['segundo_nombre'])?></td>
    <td align="right">
      <a href="">Editar</a>
    </td>
  </tr>  

  <tr>
    <td>Apellidos:</td>
    <td><?php echo $objeto2->escape($row['primer_apellido']." ".$row['segundo_apellido'])?></td>
    <td align="right">
      <a href="">Editar</a>
    </td>
  </tr>  

  <tr>
    <td>Email:</td>
    <td><?php echo $objeto2->escape($row['email_usuario'])?></td>
    <td align="right">
      <a href="">Editar</a>
    </td>
  </tr>                               
                              
 <tr> 
    <td>Telefono:</td>
    <td><?php echo $objeto2->escape($row['telefono'])?></td>
    <td align="right">
      <a href="">Editar</a>
    </td>
 </tr>         

 <tr> 
    <td>Tipo documento:</td>
    <td><?php echo $objeto2->escape($row['tipo_documento'])?></td>
    <td align="right">
      <a href="">Editar</a>
    </td>
 </tr>            

  <tr>
    <td>Documento:</td>
    <td><?php echo $objeto2->escape($row['documento'])?></td>
    <td style="color: #C1C1C1 " align="right">
      No se puede editar
    </td>
 </tr>

  <tr>
    <td>Permisos:</td>
    <td>
     <?php 
    if ($objeto2->escape($row['id_rol'] == 1)) {
      echo "Administrador";
    }
    if ($objeto2->escape($row['id_rol'] == 2)) {
      echo "Usuario";
    }
    if ($objeto2->escape($row['id_rol'] == 3)) {
      echo "visitante";
    }                            
    ?>
        
    </td>
    <td style="color: #C1C1C1 " align="right">
      No se puede editar
    </td>
 </tr>  

<?php } $objeto->CloseDB();?>

</table>
</div>


<hr style="border-top: 1px double #797979;"> 

</div>

     







</div>
</div>









    </body>
</html>
