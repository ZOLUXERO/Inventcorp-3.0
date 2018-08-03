<?php

require '../../modelo/crudcat/alumno.model.php';

if (isset($_GET['edit'])) {
    $cod = $_GET['edit'];
    $update = true;

    $objeto3 = new clases;
    $res3 = $objeto3->obtenercat($cod);

    if (count($res3) == 1 ) {
        $n = mysqli_fetch_array($res3);
        $nom=$n['nombre_categoria'];
        $des=$n['desc_categoria'];

    }
//$row = $res->fetch_array(MYSQLI_ASSOC)

}

?>



<html lang="en">

<head>
<?php //include_once '../../../controlador/control.php' ?>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<?php
include_once '../../controlador/control.php'; 
include_once '../../controlador/controladminusu.php';
include_once 'header.php'; 
?>



<div class="container-fluid">
<div class="row">
<div class="col-sm-3 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>

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



            <form method="post" action="../../controlador/crudcat/controlador.php" class="navbar-form navbar-default">
            <input type="hidden" name="cod" value="<?php echo $cod; ?>">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <?php if ($update == true): ?>
                                    
                            <?php else: ?>
                                    <td >Codigo categoria</td>
                                    <td><input type="text" class="form-control" name="cod" required /></td>
                            <?php endif ?>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Nombre categoria</td>
                            <td><input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>" required /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Descripcion</td>
                            <td><input type="text" class="form-control" name="des" value="<?php echo $des; ?>" required /></td>
                        </tr> 
                </div>





                
                <tr><td style="padding:2px"></td></tr>
                <tr>

                        <td colspan="2" align="center">
                                <?php if ($update == true): ?>
                                
                                <a href="crudcategoria.php">Cancelar</a>
                                
                                    <button  type="submit" name="actualizar" class="btn btn-success" >Actualizar</button>
                                <?php else: ?>
                                    <button  type="submit" name="guardarcat" class="btn btn-default" >Guardar</button>
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
                            <td style="font-family:Tahoma, Geneva, sans-serif">Codigo Categoría</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Nombre Categoría</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Descripcion</td>
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
                            <td><?php echo $row['id_categoria']; ?></td>
                            <td><?php echo $row['nombre_categoria']; ?></td>
                            <td><?php echo $row['desc_categoria']; ?></td>

                           
                            <td>
                                <a href="crudcategoria.php?edit=<?php echo $row['id_categoria']; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="../../controlador/crudcat/controlador.php?del=<?php echo $row['id_categoria']; ?>">Eliminar</a>
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