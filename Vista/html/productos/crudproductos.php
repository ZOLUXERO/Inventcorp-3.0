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
    $cod = $_GET['edit'];
    $update = true;

    $objeto3 = new clases;
    $res3 = $objeto3->obtener($cod);

    if (count($res3) == 1 ) {
        $n = mysqli_fetch_array($res3);
        $nom=$n['nombre_producto'];
        $des=$n['desc_producto'];
        $pen=$n['precio_entrada'];
        $pas=$n['precio_salida'];
        $fec=$n['fecha_ingreso'];
        $cat=$n['id_categoria'];

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">INVENTCORP</a>
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




<div class="container-fluid">
<div class="row">
<div class="col-sm-3 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<ul class="nav nav-pills nav-stacked"> 
<li class="active"><a href="../../../index.php"><span class="glyphicon glyphicon-list"></span> Inicio</a></li>
<li><a href="../usuarios/crudusuarios.php">Buscar Usuarios<span class="glyphicon glyphicon-user pull-right"></span> </a></li>
<li><a href="#">Productos<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="../categorias/crudcategorias.php">Categorias<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">Clientes<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="../listar/crudlistar.php">proveedores<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
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
            <input type="hidden" name="id" value="<?php echo $cod; ?>">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <?php if ($update == true): ?>
                                    
                            <?php else: ?>
                                    <td >Codigo producto</td>
                                    <td><input type="text" class="form-control" name="cod"/></td>
                            <?php endif ?>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Nombre producto</td>
                            <td><input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>"  /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >descripcion</td>
                            <td><input type="text" class="form-control" name="des" value="<?php echo $des; ?>"  /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >precio entrada</td>
                            <td><input type="text" class="form-control" name="pen" value="<?php echo $pen; ?>"  /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >precio salida</td>
                            <td><input type="text" class="form-control" name="pas" value="<?php echo $pas; ?>"  /></td>
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
                <div class="form-group">
                        <tr>
                            <td >categoria</td>
                             <td>
                                <select class="form-control" name="cat"  >
                                    <option value="1" <?php echo $cat == 1 ? 'selected' : ''; ?>>comida</option>
                                    <option value="2" <?php echo $cat == 2 ? 'selected' : ''; ?>>medicamento</option>
                                </select>
                            </td>
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


              
            
           


             <div class="col-sm-12 col-md-12">

             <div class="table-responsive">
                    <table class="table table-hover table-striped" align="center">
                    
                    <thead>
                        <tr>
                            <tr style="color:#FFF; background-color:#369">
                            <td style="font-family:Tahoma, Geneva, sans-serif">Codigo Producto</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Producto</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Precio compra</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Precio venta</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Categoria</td>
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
                            <td><?php echo $row['codigo_producto']; ?></td>
                            <td><?php echo $row['nombre_producto']; ?></td>
                            <td><?php echo $row['desc_producto']; ?></td>
                            <td><?php echo $row['precio_entrada']; ?></td>
                            <td><?php echo $row['precio_salida']; ?></td>
                            <td><?php echo $row['fecha_ingreso']; ?></td>
                            <td><?php echo $row['id_categoria']; ?></td>
                            <td>
                                <a href="crudproductos.php?edit=<?php echo $row['codigo_producto']; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="controlador.php?del=<?php echo $row['codigo_producto']; ?>">Eliminar</a>
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

    </body>
</html>
