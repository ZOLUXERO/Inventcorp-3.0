<?php
$connect = mysqli_connect("localhost", "root", "", "inventcorp");
$sql = "SELECT email_usuario,nombre_usuario,cedula,telefono FROM usuarios";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Exportar sus inventarios a Excel</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                           
                         <th>email_usuario</th>  
                         <th>nombre_usuario</th>  
       <th>cedula</th>
       <th>telefono</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["email_usuario"].'</td>  
         <td>'.$row["nombre_usuario"].'</td>  
         <td>'.$row["cedula"].'</td>  
         <td>'.$row["telefono"].'</td>  
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="exportar1.php">
     <input type="submit" name="exportar" class="btn btn-success" value="Exportar" />
    </form>
   </div>  
  </div>  
 </body>  
</html>