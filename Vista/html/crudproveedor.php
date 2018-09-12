<?php
include_once '../../modelo/mdlescape.php';
include_once '../../modelo/mdlprovlistar.php';
include_once'../../modelo/mdlprovobtener.php';

if (isset($_GET['edit'])) {
    $codprov = $_GET['edit'];
    $update = true;
    $objeto3 = new Proveedorobt;
    $res3 = $objeto3->obtenerprov($codprov);
    if (count($res3) == 1 ) {
        $n = mysqli_fetch_array($res3);
        $nom1prov=$n['primer_nombre_provee_clie'];
        $nom2prov=$n['segundo_nombre_provee_clie'];
        $nom3prov=$n['primer_apellido_provee_clie'];
        $nom4prov=$n['segundo_apellido_provee_clie'];
        $emaprov=$n['email_proveedor_cliente'];
        $telprov=$n['telefono_proveedor_cliente'];


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
<h3 class="panel-title">PROVEEDORES</h3>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->

<div class="row">
 <div class="col-sm-12 col-md-12">
 <table class="" style="" align="center"> 

  </table>



            <form method="post" action="../../controlador/crudprovee/controladorprov.php" class="navbar-form navbar-default">
            <input type="hidden" name="id" value="<?php echo $codprov; ?>">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <?php if ($update == true): ?>
                                    
                            <?php else: ?>
                                    <td >Documento Proveedor</td>
                                    <td><input type="text" class="form-control" name="codprov" required /></td>
                            <?php endif ?>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Primer Nombre</td>
                            <td><input type="text" class="form-control" name="nom1prov" value="<?php echo $nom1prov; ?>" required /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Segundo Nombre</td>
                            <td><input type="text" class="form-control" name="nom2prov" value="<?php echo $nom2prov; ?>" required /></td>
                        </tr> 
                </div>



                                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Primer Apellido</td>
                            <td><input type="text" class="form-control" name="nom3prov" value="<?php echo $nom3prov; ?>" required /></td>
                        </tr> 
                </div>



                                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Segundo Apellido</td>
                            <td><input type="text" class="form-control" name="nom4prov" value="<?php echo $nom4prov; ?>" required /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Email</td>
                            <td><input type="text" class="form-control" name="emaprov" value="<?php echo $emaprov; ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Ingrese una dirección de email valida" /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Telefono</td>
                            <td><input type="text" class="form-control" name="telprov" value="<?php echo $telprov; ?>" required /></td>
                        </tr> 
                </div>





              


                
                <tr><td style="padding:2px"></td></tr>
                <tr>

                        <td colspan="2" align="center">
                                <?php if ($update == true): ?>
                                
                                <a href="crudproveedor.php">Cancelar</a>
                                
                                    <button  type="submit" name="actualizarprov" class="btn btn-success" >Actualizar</button>
                                <?php else: ?>
                                    <button  type="submit" name="guardarprov" class="btn btn-default" >Guardar</button>
                                <?php endif ?>
                        </td>
                </tr>
                <tr><td style="padding:2px"></td></tr>
                <tr>
                    <?php 
                    if(isset($_REQUEST['dato'])){
                     echo "<td colspan='2' align='center'><div class='alert alert-success'>"."REGISTRO CORRECTO"."</div>";
                    } 
                    if(isset($_REQUEST['dato1'])){
                     echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."YA HAY ALGUIEN CON EL MISMO CODIGO EN EL SISTEMA"."</div>"; 
                     }
                    if(isset($_REQUEST['dato2'])){
                     echo "<td colspan='2' align='center'><div class='alert alert-success'>"."POVEEDOR ACTUALIZADO"."</div>"; 
                     }
                     ?>
                    
                </tr>


            </table>

            </form>


              
            
           


             <div class="col-sm-12 col-md-12">

             <div class="table-responsive">
                    <table class="table table-hover table-striped" align="center">
                    
                    <thead>
                        <tr>
                            <tr style="color:#FFF; background-color:#369">
                            <td style="font-family:Tahoma, Geneva, sans-serif">Código Proveedor</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Nombre</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Email</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Teléfono</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Estado</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Editar</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Eliminar</td>
                        </tr>
                    </thead>
                    
                    <?php
                    $objeto= new Proveedorlis;
                    $res=$objeto->listarprov();

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
                                <a href="crudproveedor.php?edit=<?php echo $row['codigo_proveedor_cliente']; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="../../controlador/crudprovee/controladorprov.php?delprov=<?php echo $row['codigo_proveedor_cliente']; ?>">Eliminar</a>
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
