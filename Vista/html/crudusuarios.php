 
<?php

require '../../modelo/crudusuario/clasescrudu.php';

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


<html lang="en">

<head>
<?php //include_once '../../../controlador/control.php' ?>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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


   
            <form method="post" action="../../controlador/crudusuario/controlador.php" class="navbar-form navbar-default">
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
                                <a href="../../controlador/crudusuario/controlador.php?del=<?php echo $row['id']; ?>">Eliminar</a>
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
