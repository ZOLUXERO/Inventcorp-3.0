<?php
include_once '../../modelo/mdlescape.php';
include_once '../../modelo/crudcliente/mdlclielistar.php';
include_once '../../modelo/crudcliente/mdlclieobtener.php';

if (isset($_GET['edit'])) {
    $codclie = $_GET['edit'];
    $update = true;

    $objeto3 = new Clienteobt;
    $res3 = $objeto3->obtenerclie($codclie);

    if (count($res3) == 1 ) {
        $n = mysqli_fetch_array($res3);
        $nom1clie=$n['primer_nombre_provee_clie'];
        $nom2clie=$n['segundo_nombre_provee_clie'];
        $nom3clie=$n['primer_apellido_provee_clie'];
        $nom4clie=$n['segundo_apellido_provee_clie'];
        $emaclie=$n['email_proveedor_cliente'];
        $telclie=$n['telefono_proveedor_cliente'];


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
<h3 class="panel-title">CLIENTES</h3>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->

<div class="row">
 <div class="col-sm-12 col-md-12">
 <table class="" style="" align="center"> 
  <tr><td style="color:#800000; font-family:Tahoma, Geneva, sans-serif" align="center">BASE DE DATOS</td></tr>
  </table>



            <form method="post" action="../../controlador/crudclie/controladorclie.php" class="navbar-form navbar-default">
            <input type="hidden" name="id" value="<?php echo $codclie; ?>">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <?php if ($update == true): ?>
                                    
                            <?php else: ?>
                                    <td >Documento Cliente</td>
                                    <td><input type="text" class="form-control" name="codclie" required /></td>
                            <?php endif ?>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Primer Nombre</td>
                            <td><input type="text" class="form-control" name="nom1clie" value="<?php echo $nom1clie; ?>" required /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Segundo Nombre</td>
                            <td><input type="text" class="form-control" name="nom2clie" value="<?php echo $nom2clie; ?>" required /></td>
                        </tr> 
                </div>



                                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Primer Apellido</td>
                            <td><input type="text" class="form-control" name="nom3clie" value="<?php echo $nom3clie; ?>" required /></td>
                        </tr> 
                </div>



                                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Segundo Apellido</td>
                            <td><input type="text" class="form-control" name="nom4clie" value="<?php echo $nom4clie; ?>" required /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Email</td>
                            <td><input type="text" class="form-control" name="emaclie" value="<?php echo $emaclie; ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Ingrese una direccion de email valida" /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Teléfono</td>
                            <td><input type="text" class="form-control" name="telclie" value="<?php echo $telclie; ?>" required /></td>
                        </tr> 
                </div>





              


                
                <tr><td style="padding:2px"></td></tr>
                <tr>

                        <td colspan="2" align="center">
                                <?php if ($update == true): ?>
                                
                                <a href="crudcliente.php">Cancelar</a>
                                
                                    <button  type="submit" name="actualizarclie" class="btn btn-success" >Actualizar</button>
                                <?php else: ?>
                                    <button  type="submit" name="guardarclie" class="btn btn-default" >Guardar</button>
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
                            <td style="font-family:Tahoma, Geneva, sans-serif">Código cliente</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Nombre</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Email</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Teléfono</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Estado</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Editar</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Eliminar</td>
                        </tr>
                    </thead>
                    
                    <?php
                    $objeto= new Clientelis;
                    $res=$objeto->listarclie();

                    $objetoe= new Escap;

                     while($row = $res->fetch_array(MYSQLI_ASSOC)){
                      ?>
                        <tr>
                            <td><?php echo $objetoe->escape($row['codigo_proveedor_cliente']); ?></td>
                            <td>
                                <?php 
                                  echo $objetoe->escape($row['primer_nombre_provee_clie']." ");
                                  echo $objetoe->escape($row['segundo_nombre_provee_clie']." ");
                                  echo $objetoe->escape($row['primer_apellido_provee_clie']." ");
                                  echo $objetoe->escape($row['segundo_apellido_provee_clie']);
                                ?>   
                                    
                                </td>
                            <td><?php echo $objetoe->escape($row['email_proveedor_cliente']); ?></td>
                            <td><?php echo $objetoe->escape($row['telefono_proveedor_cliente']); ?></td>
                            <td><?php echo $objetoe->escape($row['estado_proveedor_cliente']); ?></td>
                            <td>
                                <a href="crudcliente.php?edit=<?php echo $row['codigo_proveedor_cliente']; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="../../controlador/crudclie/controladorclie.php?delclie=<?php echo $row['codigo_proveedor_cliente']; ?>">Eliminar</a>
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
         <form method="post" action="exportarclie1.php">
     <input type="submit" name="exportar" class="btn btn-success" value="Exportar" />
    </form>
        </div>
       


</div>
</div>



    </body>
</html>
