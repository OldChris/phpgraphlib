<?php
include('../phpgraphlib.php');
$min = array( 5.875,6.187,5.875,18.125,18.187, 18.062,18.187,18.062,18.125,17.812,
      17.937,17.500,17.812, 17.437, 18.187 
	);
$max = array(  7.000,  6.750, 18.312, 18.375, 18.500, 18.187, 18.500, 18.187, 
       18.875, 18.062, 19.687, 18.750, 19.687, 19.375, 20.187 
	);
$avg = array(6.56,   6.45,   10.30,   18.27, 18.36,   18.12,   18.33,   18.11,   18.39,
	17.92,  18.81,   17.75,   18.78,   17.82, 19.15 
	);
$war = array( 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22 
	);
$err = array( 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25  
	);
$rangeMinimum=-3.6875 ;
$rangeMaximum=34.5625 ;

$graph = new PHPGraphLib(800, 640);
$graph->addData($min, $max, $avg, $war, $err);
$graph->setTitleLocation('left');
$graph->setTitle("Temperature in min, max, average with warning and error level");
$graph->setCopyright("Copyright text");
$graph->setCreationDate(true);
$graph->setBackgroundColor("219,237,216");
$graph->setTitleColor("maroon");
$graph->setTitleLocation("left");
$graph->setTitleXAxis("Title X-axis");
$graph->setTitleYAxis("Title Y-axis");
$graph->setBars(false);
$graph->setLine(true);
$graph->setLineColor("blue", "black", "fuscia", "yellow", "red");
$graph->setLegend(true);
$graph->setLegendTitle("min", "max", "avg", "war", "err");
$graph->setDataPoints(true, true, true, true, true);
$graph->setDataPointColor('black','green','black','green','black');
$graph->setDataValues(true, true, true, true, true);
$graph->setDataValueColor('black','green','black','green','black');
$graph->setRange($rangeMaximum,$rangeMinimum);
$graph->createGraph();
