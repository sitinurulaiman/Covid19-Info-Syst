<?php 
include "header.php"; 
header('X-Frame-Options: DENY'); 
$dataPoints = array(
	array("label"=> "Total Cases", "y"=> 8985),
	array("label"=> "Recovered", "y"=> 8647),
	array("label"=> "Deaths", "y"=> 125),
	array("label"=> "In Treatment", "y"=> 213),
	array("label"=> "ICU", "y"=> 2),
	array("label"=> "Ventilator", "y"=> 1),
);
	
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Statistic of Covid-19 Information"
	},
	axisY: {
		title: "Number of Patients"
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

</head>

<body>
<div id="chartContainer" style="height: 370px; width: 70%; padding-top: 150px; padding-left: 200px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</body>
</html>