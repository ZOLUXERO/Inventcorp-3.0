<?php
include_once '../../modelo/mdlcatlistar.php';
include_once '../../modelo/mdlprodlistar.php';
include_once'../../modelo/mdlprodobtener.php';
include_once '../../modelo/mdlescape.php';

if (isset($_GET['edit'])) {
    $cod = $_GET['edit'];
    $update = true;
    $objeto3 = new Productoobt;
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

<div class="col-sm-4 col-md-4"><h class="panel-title">PRODUCTOS</h></div> 
<div class="col-sm-8 col-md-8"><form align="right" action="crudproductosc1.php" method="post">

<tr align="right">Busqueda:
     <input type="text" name="insertp1">
     <button  type="submit" name="buscarp1" >Buscar</button>    
</tr>

</form>
</div>   

<br>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->

<div class="row">
 <div class="col-sm-12 col-md-12">


            <form method="post" action="../../controlador/crudprod/controlador.php" class="navbar-form navbar-default">
            <input type="hidden" name="id" value="<?php echo $cod; ?>">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <?php if ($update == true): ?>
                                    
                            <?php else: ?>
                                    <td >Código producto</td>
                                    <td><input type="text" class="form-control" name="cod" maxlength="50" required  title="máximo 11 letras o numeros no caracteres especiales"/></td>
                            <?php endif ?>
                        </tr> 
                </div>
<!--  (codigo_producto)pattern="^[A-Za-z0-9 -]+$"  (nombre_producto)pattern="^[A-Za-z -]+$" -->


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Nombre producto</td>
                            <td><input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>" maxlength="50" required  title="Solo Letras 11 máximo no caracteres especiales" /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Descripción</td>
                            <td><input type="text" class="form-control" name="des" value="<?php echo $des; ?>"  maxlength="50" required pattern="^[A-Za-z -]+$" title="Solo Letras 50 máximo no caracteres especiales"/></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Precio entrada</td>
                            <td><input type="text" class="form-control" name="pen" value="<?php echo $pen; ?>" maxlength="4" required pattern="[0-9]+" title="Solo numeros, 4 máximo(cambiar)" /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Precio salida</td>
                            <td><input type="text" class="form-control" name="pas" value="<?php echo $pas; ?>" maxlength="4" required pattern="[0-9]+" title="Solo numeros, 4 máximo(cambiar)" /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Fecha</td>
                            <td><input type="date" class="form-control" name="fec" value="<?php echo $fec; ?>" required /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>

                            <?php if ($update == true): ?>

                            <td >Categoría</td>
                             <td>
                               <select  class="form-control" name="cat" >
                                <option value="<?php echo $cat;?>" ><?php echo $cat; ?></option>
                                <option disabled="disabled">-------</option>
                                <?php
                                 $objeto1= new Categorialis;
                                 $res1=$objeto1->listar();

                                $x = 0;

                                while($row1 = $res1->fetch_array(MYSQLI_ASSOC)){ 
                                $x ++ ;
                                
                                ?>
                                                                
                                 <option value="<?php echo $x;?>"> <?php echo $row1['nombre_categoria']." [".$x."] " ?></option>
                                                               
                                <?php } ?>

                                </select>
                            </td>

                            <?php else: ?>

                            <td >Categoría</td>
                             <td>
                               <select required class="form-control" name="cat">
                                
                                <option value="" disabled selected>Seleccione su categoría</option>
                                <?php
                                  $objeto1= new Categorialis;
                                 $res1=$objeto1->listar();

                                $x = 0;

                                while($row1 = $res1->fetch_array(MYSQLI_ASSOC)){ 
                                $x ++ ;
                                
                                ?>
                                                                
                                 <option value="<?php echo $x;?>"> <?php echo $row1['nombre_categoria']." [".$x."] " ?></option>
                                                               
                                <?php } ?>

                                </select>
                            </td>
                            <?php endif ?>
                        </tr> 
                </div>


                
                <tr><td style="padding:2px"></td></tr>
                <tr>

                        <td colspan="2" align="center">
                                <?php if ($update == true): ?>
                                
                                <a href="crudproductos.php">Cancelar</a>
                                
                                    <button  type="submit" name="actualizar" class="btn btn-success" >Actualizar</button>
                                <?php else: ?>
                                    <button  type="submit" name="guardar" class="btn btn-default" >Guardar</button>
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
                     echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."YA HAY UN PRODUCTO CON EL MISMO CODIGO EN EL SISTEMA"."</div>"; 
                     }
                    if(isset($_REQUEST['dato2'])){
                     echo "<td colspan='2' align='center'><div class='alert alert-success'>"."PRODUCTO ACTUALIZADO"."</div>"; 
                     }
                    if(isset($_REQUEST['elim'])){
                     echo "<td colspan='2' align='center'><div class='alert alert-danger'>"."PRODUCTO ELIMINADO"."</div>"; 
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
                            <td style="font-family:Tahoma, Geneva, sans-serif">Código Producto</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Producto</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Descripción</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Precio compra</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Precio venta</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Fecha</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Categoría</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Seguimiento</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Editar</td>
                            <td style="font-family:Tahoma, Geneva, sans-serif">Eliminar</td>
                        </tr>
                    </thead>
                    
                    <?php
                    $objeto= new Productolis;
                    $res=$objeto->listar();
                    $objeto2= new Escap;

                     while($row = $res->fetch_array(MYSQLI_ASSOC)){
                      ?>
                        <tr>
                            <td><?php echo $objeto2->escape($row['codigo_producto']); ?></td>
                            <td><?php echo $objeto2->escape($row['nombre_producto']); ?></td>
                            <td><?php echo $objeto2->escape($row['desc_producto']); ?></td>
                            <td><?php echo $objeto2->escape($row['precio_entrada']); ?></td>
                            <td><?php echo $objeto2->escape($row['precio_salida']); ?></td>
                            <td><?php echo $objeto2->escape($row['fecha_ingreso']); ?></td>
                            <td><?php echo $objeto2->escape($row['id_categoria']); ?></td>
                            <td>
                                <a href="chart.php?edit=<?php echo $row['codigo_producto']; ?>">Seguimiento</a>
                            </td>
                            <td>
                                <a href="crudproductos.php?edit=<?php echo $row['codigo_producto']; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="../../controlador/crudprod/controlador2.php?del=<?php echo $row['codigo_producto']; ?>">Eliminar</a>
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
         <form method="post" action="exportarprod1.php">
     <input type="submit" name="exportar" class="btn btn-success" value="Exportar" />
    </form>
        </div>
       


</div>
</div>



    </body>
</html>
