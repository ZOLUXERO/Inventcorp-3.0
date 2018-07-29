<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["exportar"]))
{
 $query = "SELECT Nombre, Apellido, Sexo, FechaNacimiento FROM alumnos";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Nombre</th>  
                         <th>Apellido</th>  
       <th>Sexo</th>
       <th>FechaNacimiento</th>
                    </tr>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["Nombre"].'</td>  
                         <td>'.$row["Apellido"].'</td>  
                         <td>'.$row["Sexo"].'</td>  
       <td>'.$row["FechaNacimiento"].'</td>
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