<?php  
session_start();  //Inicio la sesión  

if ($_SESSION["validar"]!="true") {  //COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
    //si no existe, envio a la página de autentificacion      
header("Location: ../seguridaddb.php");  
    //ademas salgo de este script      
exit();  
}  

?> 
<?php

require 'alumno.model.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;

    $objeto3 = new clases;
    $res3 = $objeto3->obtener($id);

    if (count($res3) == 1 ) {
        $n = mysqli_fetch_array($res3);
        $nom=$n['Nombre'];
        $ape=$n['Apellido'];
        $sex=$n['Sexo'];
        $fec=$n['FechaNacimiento'];

    }
//$row = $res->fetch_array(MYSQLI_ASSOC)

}

?>

<?php
$dt="";

/*if (session_status() !== PHP_SESSION_ACTIVE) 
{
    session_start();
}*/


$archivo = basename($_SERVER['PHP_SELF']);
if ($archivo=="index.php")
{
    $ruta="vista/html/";
}
else
{
    $ruta="";
}
?>

<html lang="en">

<head>
<?php //include_once '../../../controlador/control.php' ?>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../../index.php">INVENTCORP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo $ruta;?>../../../index.php">Home</a></li>
      <li><a href="#">Acerca de nosotros</a></li>
      <li><a href="#">Contactenos</a></li>
      <li><a href="<?php echo $ruta;?>../admon.php"">Mostrar tablas db</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../../controlador/salir.php';} else { echo $ruta.'../seguridaddb.php';}?>"><span class="glyphicon glyphicon-log-out"></span> <?php if(isset($_SESSION["session"])){ echo "Salir";} else{echo "Logueo";}?></a></li>
     
     <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'';} else { echo $ruta.'../registro.php';}?>"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION["session"])){ echo $_SESSION["session"];} else{echo "Registro";}?></a></li>
      

    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-sm-3 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<ul class="nav nav-pills nav-stacked"> 
<li class="active"><a href="../../../index.php"><span class="glyphicon glyphicon-list"></span> Inicio</a></li>
<li><a href="crudusuarios.php">Buscar Usuarios<span class="glyphicon glyphicon-user pull-right"></span> </a></li>
<li><a href="../Productos/crudproductos.php">Productos<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">Categorias<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">Clientes<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">Proveedores<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
</ul>

</div>

<div class="col-sm-10 col-md-10">
<div class="panel panel-default">

<!-- contenedor del titulo-->

<div class="panel-heading">
<h3 class="panel-title">BASE DE DATOS USUARIOS</h3>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->

<div class="row">
 <div class="col-sm-12 col-md-12">
 <table class="" style="" align="center"> 
  <tr><td style="color:#800000; font-family:Tahoma, Geneva, sans-serif" align="center">BASE DE DATOS</td></tr>
  </table>


   
            <form method="post" action="controlador.php" class="navbar-form navbar-default">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <td >Nombre</td>
                            <td><input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>"  /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Apellido</td>
                            <td><input type="text" class="form-control" name="ape" value="<?php echo $ape; ?>"  /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >sexo</td>
                             <td>
                                <select class="form-control" name="sex"  >
                                    <option value="1" <?php echo $sex == 1 ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="2" <?php echo $sex == 2 ? 'selected' : ''; ?>>Femenino</option>
                                </select>
                            </td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >fecha</td>
                            <td><input type="date" class="form-control" name="fec" value="<?php echo $fec; ?>"  /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <tr>
                        <td colspan="2" align="center">
                                <?php if ($update == true): ?>
                                    <button  type="submit" name="actualizar" class="btn btn-success" >Actualizar</button>
                                <?php else: ?>
                                    <button  type="submit" name="guardar" class="btn btn-default" >Guardar</button>
                                <?php endif ?>
                        </td>
                </tr>

            </table>

            </form>
                    





            
                
                <br/>

			 <div class="col-sm-12 col-md-12">

             <div class="table-responsive">
                    <table class="table table-hover table-striped" align="center">
                    
                    <thead>
                        <tr>
                            <tr style="color:#FFF; background-color:#369">
                            <td style="font-family:Tahoma, Geneva, sans-serif">Nombre</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Apellido</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Sexo</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Nacimiento</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    
                    <?php
                        $objeto= new clases;
                        $res=$objeto->listar();
                     
                     while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <tr>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['Apellido']; ?></td>
                            <td><?php echo $row['Sexo'] == 1 ? 'H' : 'F'; ?></td>
                            <td><?php echo $row['FechaNacimiento']; ?></td>
                            <td>
                                <a href="crudusuarios.php?edit=<?php echo $row['id']; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="controlador.php?del=<?php echo $row['id']; ?>">Eliminar</a>
                            </td>
                        </tr>
                       <?php 
                     } $objeto->CloseDB();?>
                </table>  
                <br/>
             </div>
              
               
                </div>   
              </div>
            </div>
        </div>
         <form method="post" action="exportar1.php">
     <input type="submit" name="exportar" class="btn btn-success" value="Exportar" />
    </form>
        </div>
       
</div>

</div>

</div>

</div><!-- Cierra div ” row”-->
</div><!-- Cierra div ” container”-->
    </body>
</html>
