<?php

include("clases.php");

	

	$objeto = new clases;
	$res = $objeto->listar();

$result = $link->query( $res );

if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . $link->error . "n";
  $message .= 'Whole query: ' . $result;
  die( $message );
}

// Set proper HTTP response headers
header( 'Content-Type: application/json' );

// Print out rows
$data = array();
while ( $row = $result->fetch_assoc() ) {
  $data[] = $row;
}
echo json_encode( $data );

// Close the connection
mysqli_close($link);
?>