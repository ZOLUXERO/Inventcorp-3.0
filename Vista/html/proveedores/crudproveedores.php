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
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../../controlador/salir.php';} else { echo $ruta.'../seguridaddb.php';}?>"><span class="glyphicon glyphicon-log-out"></span> <?php if(isset($_SESSION["session"])){ echo "Salir";} else{echo "Logueo";}?></a></li>
     
     <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'';} else { echo $ruta.'../registro.php';}?>"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION["session"])){ echo $_SESSION["session"];} else{echo "Registro";}?></a></li>
      

    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-2 column margintop20"> <!--Columna de 2 espacios de 12 -->
<ul class="nav nav-pills nav-stacked"> 
<li class="active"><a href="../../../index.php"><span class="glyphicon glyphicon-list"></span> Inicio</a></li>
<li><a href="../usuarios/crudusuarios.php">Buscar Usuarios<span class="glyphicon glyphicon-user pull-right"></span> </a></li>
<li><a href="crudproveedores.php">Cree su Inventario<span class="glyphicon glyphicon-chevron-right pull-right"></span> </a></li>
<li><a href="#">Sus Inventarios<span class="glyphicon glyphicon-list-alt pull-right"></span> </a></li>
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
<h3 class="panel-title">BASE DE DATOS PROVEEDORES</h3>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->

<div class="row">
 <div class="col-sm-12 col-md-12">
 <table class="" style="" align="center"> 
  <tr><td style="color:#800000; font-family:Tahoma, Geneva, sans-serif" align="center">BASE DE DATOS</td></tr>
  </table>

<?php
require_once 'proveedores.entidad.php';
require_once 'proveedores.model.php';

// Logica
$alm = new Proveedor();
$model = new ProveedorModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('id',              $_REQUEST['id']);
            $alm->__SET('Nombre',          $_REQUEST['nombre_proveedor']);
            $alm->__SET('Apellido',        $_REQUEST['materia_prima']);
            $alm->__SET('Sexo',            $_REQUEST['Sexo']);
            $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
            $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
            $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
            $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
            $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
            $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);


            $model->Actualizar($alm);
            header('Location: crudproveedores.php');
            break;

        case 'registrar':
            $alm->__SET('Nombre',          $_REQUEST['Nombre']);
            $alm->__SET('Apellido',        $_REQUEST['Apellido']);
            $alm->__SET('Sexo',            $_REQUEST['Sexo']);
            $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);

            $model->Registrar($alm);
            header('Location: crudproveedores.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id']);
            header('Location: crudproveedores.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id']);
            break;
    }
}

?>
  

       
   
  
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
     <tr><td style="padding:5px"></td></tr>
   

              
            
                <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    <br />
                   <table align="center"> 
                        <tr>
                            <th >Crear Inventario</th>
                            <td><input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>"  /></td>
                        </tr> 
         
                        
                        
                        
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" class="pure-button pure-button-primary" >Guardar</button>
                            </td>
                        </tr>
                    </table>
                   
                </form>
                <br/>
			 
             
                    <table class="pure-table pure-table-horizontal" align="center">
          
                    <thead>
                        <tr>
                            <th >Inventario</th>
                            <th >Fecha Creacion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Nombre'); ?></td>
                            <td><?php echo $r->__GET('Apellido'); ?></td>
                            <td><?php echo $r->__GET('Sexo') == 1 ? 'H' : 'F'; ?></td>
                            <td><?php echo $r->__GET('FechaNacimiento'); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
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