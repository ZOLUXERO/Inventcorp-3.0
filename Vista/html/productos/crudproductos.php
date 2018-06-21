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
<li><a href="../usuarios/crudusuarios.php">Buscar Usuarios<span class="glyphicon glyphicon-user pull-right"></span> </a></li>
<li><a href="#">Productos<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
<li><a href="../categorias/crudcategorias.php">categorias<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
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
require '../../../modelo/clases.php';
// Logica
$alm = new Alumno();
$model = new AlumnoModel();

 //echo $_SESSION["idactor"];

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('id_producto',              $_REQUEST['id']);
            $alm->__SET('nombre_producto',          $_REQUEST['nombre_producto']);
            $alm->__SET('desc_producto',        $_REQUEST['desc_producto']);
            $alm->__SET('cantidad',            $_REQUEST['cantidad']);
            $alm->__SET('precio_entrada', $_REQUEST['precio_entrada']);
            $alm->__SET('precio_salida',        $_REQUEST['precio_salida']);
            $alm->__SET('fecha_ingreso',            $_REQUEST['fecha_ingreso']);
            $alm->__SET('id_categoria', $_REQUEST['id_categoria']);


            $model->Actualizar($alm);
            header('Location: crudproductos.php');
            break;

        case 'registrar':
            $alm->__SET('nombre_producto',          $_REQUEST['nombre_producto']);
            $alm->__SET('desc_producto',        $_REQUEST['desc_producto']);
            $alm->__SET('cantidad',            $_REQUEST['cantidad']);
            $alm->__SET('precio_entrada', $_REQUEST['precio_entrada']);
            $alm->__SET('precio_salida',        $_REQUEST['precio_salida']);
            $alm->__SET('fecha_ingreso',            $_REQUEST['fecha_ingreso']);
            $alm->__SET('id_categoria', $_REQUEST['id_categoria']);
           


            $model->Registrar($alm);
            header('Location: crudproductos.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id']);
            header('Location: crudproductos.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id']);
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
                   
                    <table align="center"> 
                        <div class="form-group">
                        <tr>
                            <td >Producto</td>
                            <td><input type="text" class="form-control" name="nombre_producto" value="<?php echo $alm->__GET('nombre_producto'); ?>" required></td>
                        </tr> 
                        </div>

                    <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Descripcion</td>
                            <td><input type="text" class="form-control" name="desc_producto" value="<?php echo $alm->__GET('desc_producto'); ?>"  required></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Cantidad</td>
                            <td><input type="text" class="form-control" name="cantidad" value="<?php echo $alm->__GET('cantidad'); ?>"  required></td>
                        </tr>

                    </div>


                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Precio de compra</td>
                            <td><input type="text" class="form-control" name="precio_entrada" value="<?php echo $alm->__GET('precio_entrada'); ?>"  required></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Precio de venta</td>
                            <td><input type="textcrudp" class="form-control" name="precio_salida" value="<?php echo $alm->__GET('precio_salida'); ?>"  required></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Fecha</td>
                            <td><input type="date" class="form-control" name="fecha_ingreso" value="<?php echo $alm->__GET('fecha_ingreso'); ?>"  required></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>
                     

                     <div class="form-group">
                        <tr>
                            <td  >Categorias</td>
                            <td>
                                <select class="form-control" name="id_categoria"  >
                                    <option value="1" <?php echo $alm->__GET('id_categoria') == 1 ? 'selected' : ''; ?>>Comida</option>
                                    <option value="2" <?php echo $alm->__GET('id_categoria') == 2 ? 'selected' : ''; ?>>Medicamento</option>
                                </select>
                            </td>
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
                            <td style="font-family:Tahoma, Geneva, sans-serif">Producto</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Cantidad</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Precio compra</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Precio venta</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Categoria</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nombre_producto'); ?></td>
                            <td><?php echo $r->__GET('desc_producto'); ?></td>
                            <td><?php echo $r->__GET('cantidad'); ?></td>
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
