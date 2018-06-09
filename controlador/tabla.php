<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
include("logueo.php");

 $conn = new clases();
 $read = $conn->consultar();
									
 while($r = $read->fetch_array()){ 
 echo $r["nombre"]; 
 echo "<br>";
}


?>


<table>
<tr><td></td></tr>
</table>






</body>
</html>