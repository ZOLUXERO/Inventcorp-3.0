

<html lang="en">

<head>
<?php //include_once '../../../controlador/control.php' ?>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../vista/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../vista/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<?php 
include_once '../../controlador/control.php'; 
include_once '../../controlador/controladminusu.php';
require '../../modelo/stock/mdlliststock.php';
require '../../modelo/stock/mdlobtenerstock.php';

include_once 'header.php'; 
?>



<div class="container-fluid">
<div class="row">

<div class="col-sm-2 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>


<pre class="fr-tag" style="height: 232px">

EJEMPLO PARA ELIMINAR

Text in a pre elementasdasdasdasdadasda
is displayed in a fixed-widthsadadasdasda
font, and it preservesasdsadasdsadsadsa
both      spaces andasdasdsadsadsadsad
line breakssadsadsadsadsadsasda
Text in a pre elementasdasdasdasdadasda
is displayed in a fixed-widthsadadasdasda
font, and it preservesasdsadasdsadsadsa
both      spaces andasdasdsadsadsadsad
line breakssadsadsadsadsadsasda
Text in a pre elementasdasdasdasdadasda
is displayed in a fixed-widthsadadasdasda
font, and it preservesasdsadasdsadsadsa
both      spaces andasdasdsadsadsadsad
line breakssadsadsadsadsadsasda
</pre>


</div>







<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">INGRESO DE DATOS</h3>
</div>


<form method="post" action="../../controlador/controler1.php" class="navbar-form navbar-default">
            <input type="hidden" name="id" value="">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <td >Entrada</td>
                            <td><input type="text" class="form-control" name="ent" value=""  maxlength="4" required pattern="[0-9]+" title="Solo numeros limitado a 4 por ahora(cambiar)" /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Salida</td>
                            <td><input type="text" class="form-control" name="sal" value="" maxlength="4" required pattern="[0-9]+" title="Solo numeros limitado a 4 por ahora(cambiar)" /></td>
                        </tr> 
                </div>


                 
                <div class="form-group">
                        
                            <?php if (isset($_GET['edit'])):?>
                              <tr><td style="padding:2px"></td></tr>
                              <tr>
                                    <td >Codigo </td>
                                    <td><input type="text" readonly="readonly" class="form-control" name="cod" value="<?php echo $_GET['edit']?>" /></td>
                              </tr>
                            <?php else: ?>
                              <tr><td style="padding:2px"></td></tr>
                                    <tr>
                                    <td >Codigo </td>
                                    <td><input type="text" readonly="readonly" class="form-control" name="cod" value="<?php echo $_GET['edit1']?>" /></td>
                              </tr>
                            <?php endif ?>
                            
                        
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
<h3 align="center" class="panel-title">SALIO</h3>
</div>




<br />
<br />
<br />
<h6 align="center">ESPACIO PARA MAS INFORMACION</h6>
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

<br />
<br />
<br />
<br />
<br />
<br />
<h6 align="center">ESPACIO PARA PRODUCTO</h6>
<br />
<br />
<br />
<br />
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
<h3 class="panel-title">GRAFICA DEL PRODUCTO</h3>
</div>
<p style="color:#DCA430">-----------Espacio para escribir informacion de la grafica---------</p> 
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
<h3 class="panel-title">GRAFICA DE PRODUCTOS</h3>
</div>
<p>-------------------Espacio para escribir informacion de la grafica------------</p> 
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
<h3 class="panel-title">GRAFICA DE PRECIOS DE ENTRADA</h3>
</div>
<p style="color:#DCA430">----------------Espacio para escribir informacion de la grafica--------------</p> 
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
<h3 class="panel-title">GRAFICA DE PRECIOS DE ENTRADA EN RELACION A PRECIOS DE SALIDA</h3>
</div>
<p >----------------Espacio para escribir informacion de la grafica--------------</p> 
<div class="container" style="width: 100%;" align="left">
<?php
include_once 'chartpreciosal.php'; 
?>

</div>
</div>
</div>



    </body>
</html>
