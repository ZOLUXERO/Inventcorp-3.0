<?php
include_once '../../modelo/mdlcatlistar.php';
include_once '../../modelo/mdlcatobtener.php';

if (isset($_GET['edit'])) {
    $cod = $_GET['edit'];
    $update = true;

    $objeto3 = new Categoriaobt;
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
<h3 class="panel-title">CATEGORÍAS</h3>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->

<div class="row">
 <div class="col-sm-12 col-md-12">
 <table class="" style="" align="center"> 

  </table>



            <form method="post" action="../../controlador/crudcat/controlador.php" class="navbar-form navbar-default">
            <input type="hidden" name="cod" value="<?php echo $cod; ?>">

            <table align="center">





                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Nombre categoría</td>
                            <td><input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>"  maxlength="12" required pattern="[a-zA-Z]*" title="No caracteres especiales solo letras" /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Descripción</td>
                            <td><input type="text" class="form-control" name="des" value="<?php echo $des; ?>" maxlength="50" required pattern="^[A-Za-z -]+$" title="Solo Letras 50 máximo no caracteres especiales" /></td>
                        </tr> 
                </div>





                
                <tr><td style="padding:2px"></td></tr>
                <tr>

                        <td colspan="2" align="center">
                                <?php if ($update == true): ?>
                                
                                <a href="crudcategoria.php">Cancelar</a>
                                
                                    <button  type="submit" name="actualizar" class="btn btn-success" >Actualizar <span class="glyphicon glyphicon-ok"></button>
                                <?php else: ?>
                                    <button  type="submit" name="guardarcat" class="btn btn-default">Guardar</button>
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
                            <td style="font-family:Tahoma, Geneva, sans-serif">Numero de categoria</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Nombre Categoría</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Descripción</td>
                            <td></td>
                        </tr>
                    </thead>
                    
                    <?php
                    $objeto= new Categorialis;
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

    </form>
        </div>
       


</div>
</div>



    </body>
</html>
