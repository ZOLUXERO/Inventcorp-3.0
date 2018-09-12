<?php 
include_once '../../controlador/control.php'; 
include_once '../../controlador/controladminusu.php';
include_once '../../modelo/mdlprodobtener.php';
include_once '../../modelo/mdlliststock.php';
include_once '../../modelo/mdlobtenerstock.php';

if (isset($_GET['edit']) == "") {
  header('location: crudproductos.php');
}

$objeto1= new Productoobt;
$res1=$objeto1->obtener($_GET['edit']);

if($res1->num_rows == 0)
{ 
  header('location: crudproductos.php');
}

?>

<html lang="en">

<head>

<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../vista/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../vista/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<?php 
include_once 'header.php'; 
?>



<div class="container-fluid">
<div class="row">

<div class="col-sm-2 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>


</div>







<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">INGRESO DE DATOS</h3>
</div>


<form method="post" action="../../controlador/crudstock/controler1.php" class="navbar-form navbar-default">
          
            <table align="center">
                <div class="form-group">
                        
                          <?php if (isset($_GET['edit'])):?>
                              <tr><td style="padding:2px"></td></tr>
                              <tr>
                                  <td >Codigo 
                                    <input type="hidden" name="cod" value="<?php echo $_GET['edit']?>" />
                                      <td align="right"><?php echo $_GET['edit']?>
                                    </td>
                                  </td>
                              </tr>
                            <?php endif ?> 
                            <?php if (isset($_GET['edit1'])):?>
                              <tr><td style="padding:2px"></td></tr>
                                    <tr>
                                    <td >Codigo 
                                    <td><input type="hidden" name="cod" value="<?php echo $_GET['edit1']?>" />
                                    <td align="right"><?php echo $_GET['edit1']?></td> 
                                    </td>
                              </tr>
                            <?php endif ?>
                            
                        
                        
                </div>
                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>                                                           
                            <td >Entrada</td>
                            <td><input type="text" class="form-control" name="ent" value=""  maxlength="2" required pattern="[0-9]+" title="Solo numeros limitado a 2 por ahora (cambiar)" /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Salida</td>
                            <td><input type="text" class="form-control" name="sal" value="" maxlength="2" required pattern="[0-9]+" title="Solo numeros limitado a 2 por ahora (cambiar)" /></td>
                        </tr> 
                </div>



                <tr><td style="padding:2px"></td></tr>
                <tr>
                        <td colspan="2" align="center">
                                
                                <button  type="submit" name="guardar" class="btn btn-success" >Guardar</button>
                        </td>
                </tr>

            </table>

            </form>
              


</div>


<div class="panel panel-default">
<div class="panel-heading">
<h3 align="center" class="panel-title">TOTAL</h3>
</div>

<div class="panel-body">

                      
                     <table class="table table-hover table-striped" align="center">
                        <?php if (isset($_GET['edit'])):?>
                                  <?php
                           $objeto= new Stocklis;
                           $res=$objeto->listarstock($_GET['edit']);
                           
                           $_SESSION["codp"]= $_GET['edit'];


                         while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
                          ?>
                               <tr style="font-size:30px">
                               <td align="center"><?php echo $row['total']?></td>
                             
                               </tr>    
                                        
                          <?php } $objeto->CloseDB();?>
                                <?php else: ?>
                                  <?php
                           $objeto= new Stocklis;
                           $res=$objeto->listarstock($_GET['edit1']);
                          
                           $_SESSION["codp"]= $_GET['edit1'];


                         while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
                          ?>
                               <tr style="font-size:40px">
                               <td align="center"><?php echo $row['total']?></td>
                             
                               </tr>    
                                        
                          <?php } $objeto->CloseDB();?>
                                <?php endif ?>
                          
                     
                      </table>
                      
               
                  <h4 align="center">En stock</h4>

        </div>


</div>
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">SALIÓ</h3>
</div>




<br />
<br />
<br />
<h6 align="center">ESPACIO PARA MÁS INFORMACIÓN</h6>
<br />
<br />
<br />





</div>


</div>

<div align="right" class="col-sm-4 col-md-4">
<div class="panel panel-default">
<div class="panel-heading">
<h3 align="center" class="panel-title">PRODUCTO</h3>
</div>


<table align="center" style="font-size:20px">

                  <?php if (isset($_GET['edit'])):?>
                          <?php
                           $objeto= new Productoobt;
                           $res=$objeto->obtener($_GET['edit']);
                           
                         while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
                          ?>
                               <tr >
                                <th>Codigo:</th>
                               <td align="right"><?php echo $row['codigo_producto']?></td>                             
                               </tr>
                               <tr >
                                <th>Nombre producto:</th>
                               <td align="right"><?php echo $row['nombre_producto']?></td>                             
                               </tr>
                               <tr >
                                <th>Precio entrada:</th>
                               <td align="right"><?php echo $row['precio_entrada']?></td>                             
                               </tr>
                               <tr >
                                <th>Precio salida:</th>
                               <td align="right"><?php echo $row['precio_salida']?></td>                             
                               </tr>
                               <tr >
                                <th>Fecha de ingreso:</th>
                               <td align="right"><?php echo $row['fecha_ingreso']?></td>                             
                               </tr>
                               <tr >
                                <th>Categoría:</th>
                               <td align="right"><?php echo $row['id_categoria']?></td>                             
                               </tr>                               
                               <tr >
                                <th>Descripcion:</th>
                               <td align="right"><?php echo $row['desc_producto']?></td>                             
                               </tr>

                                        
                          <?php } $objeto->CloseDB();?>
                          <?php else: ?>
                          <?php
                           $objeto= new Productoobt;
                           $res=$objeto->obtener($_GET['edit1']);
                          
                         while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
                          ?>
                               <tr >
                                <th>Codigo:</th>
                               <td align="right"><?php echo $row['codigo_producto']?></td>                             
                               </tr>
                               <tr >
                                <th>Nombre producto:</th>
                               <td align="right"><?php echo $row['nombre_producto']?></td>                             
                               </tr>
                               <tr >
                                <th>Precio entrada:</th>
                               <td align="right"><?php echo $row['precio_entrada']?></td>                             
                               </tr>
                               <tr >
                                <th>Precio salida:</th>
                               <td align="right"><?php echo $row['precio_salida']?></td>                             
                               </tr>
                               <tr >
                                <th>Fecha de ingreso:</th>
                               <td align="right"><?php echo $row['fecha_ingreso']?></td>                             
                               </tr>
                               <tr >
                                <th>Categoria:</th>
                               <td align="right"><?php echo $row['id_categoria']?></td>                             
                               </tr>
                               <tr >
                                <th>Descripcion:</th>
                               <td align="right"><?php echo $row['desc_producto']?></td>                             
                               </tr>    
                                        
                          <?php } $objeto->CloseDB();?>
                   <?php endif ?>
<br />
<br />
<br />
 


</table>

<br />
<br />
<br />
</div>
</div>




<div align="right" class="col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">HISTORIA</h3>
</div>


            
               
                   
                      
                      <pre style="height: 580px">   
                     <table class="table table-hover table-striped"  align="center">
                    
                     <?php
                       

                        if (isset($_GET['edit'])) {

                          $objeto= new Stockobt;
                          $res=$objeto->obtenerstock($_GET['edit']);

                          while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
                               ?>
                                 <tr style="font-size:16px">
                                  <td align="center"><?php echo $row['fecha']?></td>
                                  <td align="center"><?php echo $row['cantidad_ingreso']?></td>
                                  <td align="center"><?php echo $row['cantidad_salida']?></td>
                                 
                             
                                  </tr>    
                                        
                                <?php } $objeto->CloseDB();
                                  }else{

                                    $objeto= new Stockobt;
                                    $res=$objeto->obtenerstock($_GET['edit1']);

                                    while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
                                    ?>
                                     <tr style="font-size:16px">
                                      <td align="center"><?php echo $row['fecha']?></td>
                                      <td align="center"><?php echo $row['cantidad_ingreso']?></td>
                                      <td align="center"><?php echo $row['cantidad_salida']?></td>
                                     
                                 
                                      </tr>    
                                            
                                    <?php } $objeto->CloseDB();
                                  }
                                ?>           

                             
                       
                     
                      </table>
                    </pre>  
</div>

</div>

</div>



</div>
</div>



<div class="col-sm-12 col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">GRÁFICA DEL PRODUCTO</h3>
</div>
<p style="color:#DCA430">-----------Espacio para escribir información de la gráfica---------</p> 
<div class="container" style="width:100%;" align="left">
<?php
include_once 'index.html'; 
?>
<br/ >
</div>
</div>            
</div>


<div class="col-sm-12 col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">GRÁFICA DE PRODUCTOS</h3>
</div>
<p>-------------------Espacio para escribir información de la gráfica------------</p> 
<div class="container" style="width: 100%;" align="left">
<?php
include_once 'chartrelacion.php'; 
?>
</div>
</div>
</div>


<div class="col-sm-12 col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">GRÁFICA DE PRECIOS DE ENTRADA</h3>
</div>
<p style="color:#DCA430">----------------Espacio para escribir información de la gráfica--------------</p> 
<div class="container" style="width: 100%;" align="left">
<?php
include_once 'chartprecio.php'; 
?>

</div>
</div>
</div>


<div class="col-sm-12 col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">GRÁFICA DE PRECIOS DE ENTRADA EN RELACIÓN A PRECIOS DE SALIDA</h3>
</div>
<p >----------------Espacio para escribir información de la gráfica--------------</p> 
<div class="container" style="width: 100%;" align="left">
<?php
include_once 'chartpreciosal.php'; 
?>

</div>
</div>
</div>



    </body>
</html>
