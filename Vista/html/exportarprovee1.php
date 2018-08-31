<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "inventcorp");
$output = '';
if(isset($_POST["exportar"]))
{
 $query = "SELECT codigo_proveedor_cliente,primer_nombre_provee_clie,segundo_nombre_provee_clie,primer_apellido_provee_clie,segundo_apellido_provee_clie,email_proveedor_cliente,telefono_proveedor_cliente FROM listar_clientes_proveedores WHERE id_rol_listar=2";
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
