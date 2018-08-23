<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "inventcorp");
$output = '';
if(isset($_POST["exportar"]))
{
 $query = "SELECT codigo_producto,nombre_producto,desc_producto,precio_entrada,precio_salida,fecha_ingreso FROM productos WHERE estado_producto = '1'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
           <tr>  
           <th>Codigo</th>  
           <th>Nombre producto</th>  
           <th>Descripcion producto</th>
           <th>Precio entrada</th>
           <th>Precio salida</th>
           <th>Fecha ingreso</th>
           </tr>
  ';

  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
            <td>'.$row["codigo_producto"].'</td>  
            <td>'.$row["nombre_producto"].'</td>  
            <td>'.$row["desc_producto"].'</td>  
            <td>'.$row["precio_entrada"].'</td>
            <td>'.$row["precio_salida"].'</td>
            <td>'.$row["fecha_ingreso"].'</td>
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
