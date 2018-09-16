<?php

include_once("../../controlador/controler8.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>recuperar contrasena</title>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<br>	
<div class="container">
  	<div class="jumbotron">
        <h1 align="center">Verficacion del codigo</h1>
        <p class="lead" align="center">Formulario de cambio de contrasena.</p>

	
		<form action="../../controlador/controler34.php" method="post">

			<table class="" style="" align="center">

				<tr><td style="padding:5px"></td></tr>
	            <tr><td><div class="input-group input-group-sm">
	              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	              <input type="text" name="token" class="form-control" placeholder="Codigo" >
	            </div></td></tr>

	            <tr><td style="padding:5px"></td></tr>
	            <tr><td align="center"><button class="btn btn-lg btn-success" type="submit" name="verificar" width="300px">Verificar</button></td></td>

			</table>

		</form>   
           
	</div>
</div>

</body>
</html>