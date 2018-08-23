<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "inventcorp");
$output = '';
if(isset($_POST["exportar"]))
{
 $query = "SELECT codigo_proveedor_cliente,primer_nombre_provee_clie,segundo_nombre_provee_clie,primer_apellido_provee_clie,segundo_apellido_provee_clie,email_proveedor_cliente,telefono_proveedor_cliente FROM listar_clientes_proveedores WHERE estado_proveedor_cliente = '1'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                   <tr>  
                   <th>Codigo</th>  
                   <th>Primer nombre</th>  
                   <th>Segundo nombre</th>
                   <th>Primer apellido</th>
                   <th>Segundo apellido</th>
                   <th>Email</th>
                   <th>Telefono</th>
                   </tr>
                   </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                    <td>'.$row["codigo_proveedor_cliente"].'</td>  
                    <td>'.$row["primer_nombre_provee_clie"].'</td>  
                    <td>'.$row["segundo_nombre_provee_clie"].'</td>  
                    <td>'.$row["primer_apellido_provee_clie"].'</td>
                    <td>'.$row["segundo_apellido_provee_clie"].'</td>
                    <td>'.$row["email_proveedor_cliente"].'</td>
                    <td>'.$row["telefono_proveedor_cliente"].'</td>
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
