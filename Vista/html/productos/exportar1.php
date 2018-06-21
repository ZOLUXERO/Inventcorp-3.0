<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "inventcorp");
$output = '';
if(isset($_POST["exportar"]))
{
 $query = "SELECT * FROM productos";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>id_producto/th>  
                         <th>nombre_producto</th>  
                         <th>desc_producto</th>
                         <th>cantidad</th>
                         <th>precio_entrada</th>  
                         <th>precio_salida</th>  
                         <th>fecha_ingreso</th>
                         <th>estado_producto</th>
                         <th>id_categoria</th>
                    </tr>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id_producto"].'</td>  
                         <td>'.$row["nombre_producto"].'</td>  
                         <td>'.$row["desc_producto"].'</td>  
                         <td>'.$row["cantidad"].'</td>
                         <td>'.$row["precio_entrada"].'</td>  
                         <td>'.$row["precio_salida"].'</td>  
                         <td>'.$row["fecha_ingreso"].'</td>  
                         <td>'.$row["estado_producto"].'</td>
                         <td>'.$row["id_categoria"].'</td>
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