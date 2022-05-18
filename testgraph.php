
<?php
 
$dataPoints = array(
	array("label"=> "Total Case", "y"=> 8985),
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
		text: ""
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

<meta name="viewport" content="width=device-width, initial-scale=1"> 
<style>
body {
  background: #060818; font-family: "Lato", sans-serif; width: 100%; color: #ffffff; margin-left: 50px; padding-right: 30px;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #060818;
  overflow-x: hidden;
  padding-top: 60px;
  padding-left: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>

<div class="sidenav">
  <a href="index.php">Home</a>
  <a href="testgraph.php">Statistic</a>
  <a href="admin/login.php">Admin</a>
  <a href="staff/login.php">Medical Staff</a>
</div>
<div class="main">
<h2>Statistic of Covid-19 Information </h2>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</body>
</html>
