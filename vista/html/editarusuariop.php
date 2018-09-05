<?php 
include_once '../../controlador/control.php'; 
include_once '../../controlador/controladmin.php';
include_once 'header.php'; 
include_once '../../modelo/mdlusuobtener.php';
$id=$_REQUEST['id'];

if (isset($_GET['id']) == "") {
  header('location: perfilusuario.php');
}

$objeto1= new Usuarioo;
$res1=$objeto1->obtenerusuarios($id);

if($res1->num_rows == 0)
{ 
  header('location: perfilusuario.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi Proyecto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="../bootstrap/js/bootstrap.min.js"></script>

 
</head>
<body>

<div class="container">
<header>



</header>
</div>
  <div class="container">
   <div class="row">
        

				
  <div class="col-sm-12 col-md-12">
   <div class="panel panel-default">
   <!-- contenedor del titulo-->
   <div class="panel-heading">
    <h3 class="panel-title">EDICIÓN DE USUARIO</h3>
   </div>
    <!-- contenedor de descripcion ejercicios-->
   <div class="panel-body">
   <p style="color:#DCA430"> Control de usuarios - Edición.</p> 
    <!-- contenedor menu de ejercicios-->
  			  
			   <!-- Contenedor ejercicio-->
             
			   <div class="row">
			   <div class="col-sm-12 col-md-12">
               <form name="areat" action="../../controlador/controler7.php" method="post">
			   <div class="table-responsive">
               
               <?php
			   $objeto= new Usuarioo;
			   $res=$objeto->obtenerusuarios($id);	  		
			   $row = $res->fetch_array();
			   ?>    
                <table align="center" style="border-collapse:separate;border-spacing:5px">
			          <tr>
                 <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333"></td>
                 <td style="color:#666"><input name="id" type="hidden" class="form-control" value="<?php echo $row['documento']?>" style="width:320px"></td>
                </tr>
			          <tr style="color:#FFF;">
                 <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Primer Nombre</td>
                 <td style="color:#666"><input name="nom1" type="text" class="form-control" value="<?php echo $row['primer_nombre']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Segundo Nombre</td>
                  <td style="color:#666"><input name="nom2" type="text" class="form-control" value="<?php echo $row['segundo_nombre']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Primer Apellido</td>
                  <td style="color:#666"><input name="nom3" type="text" class="form-control" value="<?php echo $row['primer_apellido']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Segundo Apellido</td>
                  <td style="color:#666"><input name="nom4" type="text" class="form-control" value="<?php echo $row['segundo_apellido']?>" style="width:320px"></td>
                </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Email</td
                    ><td style="color:#666"><input name="ema" type="text" class="form-control" value="<?php echo $row['email_usuario']?>" style="width:320px"></td>
                  </tr>
                 <tr style="color:#FFF;">
                  <td align="center" style="font-family:Tahoma, Geneva, sans-serif;color:#333">Telefono</td>
                  <td style="color:#666"><input name="tel" type="text" class="form-control" value="<?php echo $row['telefono']?>" style="width:320px"></td>
                </tr>
                <tr><td  align="left" style="font-family:Tahoma, Geneva, sans-serif">Tipo de documento</td>
                  <td>
                         <select class="form-control input-sm" name="tdo" required>
                         <option value="<?php echo $row['tipo_documento']?>"><?php echo $row['tipo_documento']?></option>
                         <option value="CC">C.C. (Cédula de Ciudadanía)</option>
                         <option value="CE">C.E. (Cédula de Extranjería)</option>
                         <option value="NIT">NIT  (Número Identificación Tributaria)</option>
                         <option value="TI">T.I. (Tarjeta de Identidad)</option>
                         <option value="PP">PP   (Pasaporte)</option>
                         <option value="IDC">IDC  (Identificador Único de Cliente)</option>
                         <option value="CEL">CEL  (Número Móvil)</option>
                         <option value="RC">R.C. (Registro Civil)</option>
                         <option value="DE">D.E. (Documento de Identificación Extranjero)</option>
                         </select>
                   </td>
                </tr>

                <td align="center" style="font-family:Tahoma, Geneva, sans-serif" colspan="2"><input name="editar" type="submit" style="width:320px" value="Actualizar"></td></tr>
              
            
               
				</table>
                </div>
         
	<?php  $objeto->CloseDB();?>
 

			   </form>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
</body>
</html>
