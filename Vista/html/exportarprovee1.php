<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "inventcorp");
$output = '';
if(isset($_POST["exportar"]))
{
 $query = "SELECT email_usuario,nombre_usuario,cedula,telefono FROM usuarios";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>email_usuario</th>  
                         <th>nombre_usuario</th>  
       <th>cedula</th>
       <th>telefono</th>
                    </tr>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["email_usuario"].'</td>  
                         <td>'.$row["nombre_usuario"].'</td>  
                         <td>'.$row["cedula"].'</td>  
       <td>'.$row["telefono"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=reporte.xls');
  echo $output;
 }
}
?>
