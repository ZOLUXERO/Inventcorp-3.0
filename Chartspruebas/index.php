<?php 

$connect = mysqli_connect("localhost","root","","chart");
$query = "SELECT * FROM stock";
$result = mysqli_query($connect, $query);
$chart_data = '';

while ($row = mysqli_fetch_array($result)) {
	
	$chart_data .="{ fecha:'".$row["fecha"]."', cantidad:".$row["cantidad"].", cantidad:".$row["cantidad"].", can_salida:".$row["can_salida"]."}, ";

}

$chart_data = substr($chart_data, 0, -2);

$result2 = "SELECT sum(cantidad-can_salida) as total FROM stock";	
$row2 = mysqli_query($connect,$result2);

$rest = mysqli_fetch_array($row2);

echo $rest["total"];


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>hola prueba chart</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
	<br /><br />

	<div class="container" style="width:900px;">
		<h2 align="center">Prueba para hacer en proyecto Morris.js</h2>
		<h3 align="center">8 dias prueba</h3>
		<br /><br />
		<div id="chart"></div>
	</div>


</body>
</html>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'fecha',
 ykeys:['cantidad', 'can_salida'],
 labels:['cantidad que entro', 'cantidad que salio'],
 hideHover:'auto',
 stacked:true
});

</script>