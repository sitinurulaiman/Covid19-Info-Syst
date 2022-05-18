<?php include "header.php" ?>
<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <h2 style="margin: 20px">Filter System</h2>

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">


            <div style="background-color: white" class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
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
<div id="chartContainer" style="height: 370px; width: 100%;"></div>


                </div>

        </div>

    </div>




    
    
    
