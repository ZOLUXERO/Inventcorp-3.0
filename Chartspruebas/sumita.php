<?php

$connect = mysqli_connect("localhost", "root", "", "chart");
$result = "SELECT sum(cantidad-can_salida) as total FROM stock";	
$row = mysqli_query($connect,$result);

$rest = mysqli_fetch_array($row);

echo $rest["total"];


?>