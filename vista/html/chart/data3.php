<?php
$link = new mysqli( 'localhost', 'root', '', 'inventcorp' );
if ( $link->connect_errno ) {
  die( "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error );
}

// Fetch the data
$query = "select codigo_producto,precio_entrada,precio_salida from productos where not codigo_producto='EMP01' order by fecha_ingreso ASC";
$result = $link->query( $query );

// All good?
if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . $link->error . "n";
  $message .= 'Whole query: ' . $query;
  die( $message );
}



// Print out rows
$data = array();
echo "[";
while ( $row = $result->fetch_assoc() ) {
  echo "{".'"codigo_producto"'.":".'"'.$row['codigo_producto'].'"' .",".'"precio_entrada"'.":".'"'.$row['precio_entrada'].'"'.",".'"precio_salida"'.":".'"'.$row['precio_salida'].'"'.",".'"color"'.":" .'"#6E81DF"'."}".",";
  $data[] = $row;
}

$query2 = "select codigo_producto,precio_entrada,precio_salida from productos where codigo_producto='EMP01'";
$result2 = $link->query( $query2 );
$row2 = $result2->fetch_assoc();
echo "{".'"codigo_producto"'.":".'"'.$row2['codigo_producto'].'"' .",".'"precio_entrada"'.":".'"'.$row2['precio_entrada'].'"'.",".'"precio_salida"'.":".'"'.$row2['precio_salida'].'"'.",".'"color"'.":" .'"#6FF092"'."}"."]";




// Close the connection
mysqli_close($link);
?>
