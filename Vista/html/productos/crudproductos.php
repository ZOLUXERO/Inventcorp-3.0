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

<div class="container">

<div class="container">
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

<div class="container">
<div class="row">
<div class="col-sm-3 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<ul class="nav nav-pills nav-stacked"> 
<li class="active"><a href="../../../index.php"><span class="glyphicon glyphicon-list"></span> Inicio</a></li>
<li><a href="crudusuarios.php">Buscar Usuarios<span class="glyphicon glyphicon-user pull-right"></span> </a></li>
<li><a href="#">Productos<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">categorias<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">clientes<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="#">proveedores<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
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

<?php
require_once 'alumno.entidad.php';
require_once 'alumno.model.php';

// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('id_producto',              $_REQUEST['id_producto']);
            $alm->__SET('nombre_producto',          $_REQUEST['nombre_producto']);
            $alm->__SET('desc_producto',        $_REQUEST['desc_producto']);
            $alm->__SET('stock',            $_REQUEST['stock']);
            $alm->__SET('precio_entrada', $_REQUEST['precio_entrada']);
            $alm->__SET('precio_salida',        $_REQUEST['precio_salida']);
            $alm->__SET('fecha_ingreso',            $_REQUEST['fecha_ingreso']);
            $alm->__SET('id_categoria', $_REQUEST['id_categoria']);


            $model->Actualizar($alm);
            header('Location: crudproductos.php');
            break;

        case 'registrar':
            $alm->__SET('nombre_producto',          $_REQUEST['producto']);
            $alm->__SET('desc_producto',        $_REQUEST['descripcion']);
            $alm->__SET('stock',            $_REQUEST['stock']);
            $alm->__SET('precio_entrada', $_REQUEST['precio_entrada']);
            $alm->__SET('precio_salida',        $_REQUEST['precio_salida']);
            $alm->__SET('fecha_ingreso',            $_REQUEST['fecha']);
            $alm->__SET('id_categoria', $_REQUEST['categoria']);

            $model->Registrar($alm);
            header('Location: crudproductos.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_producto']);
            header('Location: crudproductos.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id_producto']);
            break;
    }
}

?>
  
       
   
  
  <!--<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css"> !-->
     <!--<tr><td style="padding:5px"></td></tr> !-->
   

              
            
                <form action="?action=<?php echo $alm->id_producto > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="navbar-form navbar-default" >
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id_producto'); ?>" >

                    <br />

                    <!-- SI QUITAMOS EL TABLE ALIGN CENTER LOS CAMPOS QUEDAN A LO ALRGO !-->
                   

                        <div class="form-group">
                        <tr>
                            <td >Producto</td>
                            <td><input type="text" class="form-control" name="producto" value="<?php echo $alm->__GET('nombre_producto'); ?>"  /></td>
                        </tr> 
                        </div>

                    <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Descripcion</td>
                            <td><input type="text" class="form-control" name="descripcion" value="<?php echo $alm->__GET('desc_producto'); ?>"  /></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Stock</td>
                            <td><input type="text" class="form-control" name="stock" value="<?php echo $alm->__GET('stock'); ?>"  /></td>
                        </tr>

                    </div>


                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Precio de compra</td>
                            <td><input type="text" class="form-control" name="precio_entrada" value="<?php echo $alm->__GET('precio_entrada'); ?>"  /></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >precio de venta</td>
                            <td><input type="text" class="form-control" name="precio_salida" value="<?php echo $alm->__GET('precio_salida'); ?>"  /></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >fecha</td>
                            <td><input type="text" class="form-control" name="fecha" value="<?php echo $alm->__GET('fecha_ingreso'); ?>"  /></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >categoria</td>
                            <td><input type="text" class="form-control" name="categoria" value="<?php echo $alm->__GET('id_categoria'); ?>"  /></td>
                        </tr>

                    </div>

                                                        
                   

                        <tr><td style="padding:2px"></td></tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" class="btn btn-default" >Guardar</button>
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
                            <td style="font-family:Tahoma, Geneva, sans-serif">producto</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">descripccion</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">stock</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">precio compra</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">precio venta</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">fecha</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">categoria</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nombre_producto'); ?></td>
                            <td><?php echo $r->__GET('desc_producto'); ?></td>
                            <td><?php echo $r->__GET('stock'); ?></td>
                            <td><?php echo $r->__GET('precio_entrada'); ?></td>
                            <td><?php echo $r->__GET('precio_salida'); ?></td>
                            <td><?php echo $r->__GET('fecha_ingreso'); ?></td>
                            <td><?php echo $r->__GET('id_categoria'); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id_producto; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id_producto; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>  
                <br/>
             </div>
              
               
                </div>   
              </div>
            </div>
        </div>
        </div>
       
</div>
</div>
</div>
</div><!-- Cierra div ” row”-->
</div><!-- Cierra div ” container”-->
    </body>
</html>
