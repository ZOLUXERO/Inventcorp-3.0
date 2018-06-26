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
<li><a href="../categorias/crudcategorias.php">Categorias<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
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
            $alm->__SET('id_proveedor_cliente',                  $_REQUEST['id']);
            $alm->__SET('nombre_proveedor_cliente',              $_REQUEST['nombre_proveedor_cliente']);
            $alm->__SET('email_proveedor_cliente',               $_REQUEST['email_proveedor_cliente']);
            $alm->__SET('empresa',                               $_REQUEST['empresa']);
            $alm->__SET('telefono_proveedor_cliente',            $_REQUEST['telefono_proveedor_cliente']);


            $model->Actualizar($alm);
            header('Location: crudlistar.php');
            break;

        case 'registrar':
            $alm->__SET('nombre_proveedor_cliente',         $_REQUEST['nombre_proveedor_cliente']);
            $alm->__SET('email_proveedor_cliente',          $_REQUEST['email_proveedor_cliente']);
            $alm->__SET('empresa',                          $_REQUEST['empresa']);
            $alm->__SET('telefono_proveedor_cliente',       $_REQUEST['telefono_proveedor_cliente']);


            $model->Registrar($alm);
            header('Location: crudlistar.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id']);
            header('Location: crudlistar.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id']);
            break;
    }
}

?>
  

       
   
  
  <!--<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css"> !-->
     <!--<tr><td style="padding:5px"></td></tr> !-->
   

              
            
                <form acti on="?action=<?php echo $alm->id_proveedor_cliente > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="navbar-form navbar-default" >
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id_proveedor_cliente'); ?>" >

                    <br />

                    <!-- SI QUITAMOS EL TABLE ALIGN CENTER LOS CAMPOS QUEDAN A LO ALRGO !-->
                   
                    <table align="center"> 
                        <div class="form-group">
                        <tr>
                            <td >Nombre</td>
                            <td><input type="text" class="form-control" name="nombre_proveedor_cliente" value="<?php echo $alm->__GET('nombre_proveedor_cliente'); ?>" required></td>
                        </tr> 
                        </div>

                    <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Email</td>
                            <td><input type="text" class="form-control" name="email_proveedor_cliente" value="<?php echo $alm->__GET('email_proveedor_cliente'); ?>"  required></td>
                        </tr>

                    </div>

                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Empresa</td>
                            <td><input type="text" class="form-control" name="empresa" value="<?php echo $alm->__GET('empresa'); ?>"  required></td>
                        </tr>

                    </div>


                                        <tr><td style="padding:2px"></td></tr>

                    <div class="form-group">
                        <tr>
                            <td >Telefono</td>
                            <td><input type="text" class="form-control" name="telefono_proveedor_cliente" value="<?php echo $alm->__GET('telefono_proveedor_cliente'); ?>"  required></td>
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
                            <td style="font-family:Tahoma, Geneva, sans-serif">Nombre Proveedor</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Email Proveedor</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Empresa</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Teléfono Proveedor</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nombre_proveedor_cliente'); ?></td>
                            <td><?php echo $r->__GET('email_proveedor_cliente'); ?></td>
                            <td><?php echo $r->__GET('empresa'); ?></td>
                            <td><?php echo $r->__GET('telefono_proveedor_cliente'); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id_proveedor_cliente; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id_proveedor_cliente; ?>">Eliminar</a>
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
