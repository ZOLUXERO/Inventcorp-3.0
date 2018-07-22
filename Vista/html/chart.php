

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
include_once '../../controlador/controladmin.php';
require '../../modelo/clases.php';

include_once 'header.php'; 
?>



<div class="container-fluid">
<div class="row">


<div class="col-sm-3 col-md-2 sidebar"> <!--Columna de 2 espacios de 12 -->
<?php
include_once 'menulateral.php'; 
?>

</div>


<div class="col-sm-7 col-md-7">
<div class="panel panel-default">

<!-- contenedor del titulo-->

<div class="panel-heading">
<h3 class="panel-title">BASE DE DATOS USUARIOS</h3>
</div>

<!-- contenedor de descripcion ejercicios-->

<!-- Contenedor ejercicio-->


<div class="container" style="width: 800px;" align="right">
<?php
include_once 'index.html'; 
?>
<br/ ><br /><br/ >
</div>


              
 </div>


<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">INGRESO DE DATOS</h3>
</div>


<form method="post" action="../../controlador/crudusuario/controlador.php" class="navbar-form navbar-default">
            <input type="hidden" name="id" value="">

            <table align="center">

                <div class="form-group">
                        <tr>
                            <td >Nombre</td>
                            <td><input type="text" class="form-control" name="nom" value="" required="" /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Apellido</td>
                            <td><input type="text" class="form-control" name="ape" value="" required="" /></td>
                        </tr> 
                </div>


                 <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >Codigo </td>
                            <td><input type="text" readonly="readonly" class="form-control" name="ape" value="<?php echo $_GET['edit']?>" /></td>
                        </tr> 
                </div>


                <tr><td style="padding:2px"></td></tr>
                <div class="form-group">
                        <tr>
                            <td >fecha</td>
                            <td><input type="date" class="form-control" name="fec" value=""  required="" /></td>
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


</div>



<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">CANTIDAD TOTAL</h3>
</div>

<div class="panel-body">
         
          <!-- contenedor menu de ejercicios-->
                
               <!-- Contenedor ejercicio-->
                   
                <div class="row">
                <div class="col-sm-12 col-md-12">
                <form name="areat" action="" method="post">
                
                      
                     <table class="table table-hover table-striped" align="center">
                    
                          
                     <?php
                       $objeto= new clases;
                       $res=$objeto->listarstock();
                  
                     while($row = $res->fetch_array(MYSQLI_ASSOC)){ 
                      ?>
                           <tr style="font-size:40px">
                           <td align="center"><?php echo $row['total']?></td>
                         
                           </tr>    
                                    
                      <?php } $objeto->CloseDB();?>
                      </table>
                      
               

       

               </form>
        
        
            </div>
          </div>
        </div>



</div>
</div>



<div align="right" class="col-sm-3 col-md-3">
<div class="panel panel-default">

<div class="panel-heading">
<h3 align="center" class="panel-title">BASE</h3>
</div>

<br /><br />

</div>
</div>


</div>



     

</div>
</div>

    </body>
</html>
