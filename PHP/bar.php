<?php
$dat=date('d-m-Y');
if (isset($_GET['dt'])){
$dat=$_GET['dt'];    
}

//
// This is the MODEL section:
//

/*

  SELECT c_os, COUNT( c_os ) AS total
FROM tracker
GROUP BY c_os
LIMIT 0 , 30

*/



include('php-ofc-library/open-flash-chart.php');
include_once('db.php');

$q=mysql_query("select count()");

$title = new title("Page Views for the month");

$bar = new bar_glass(55, '#D54C78', '#C31812');
$bar->set_values( array(1245,1202,455,120,3652,454,121,452,1023,1054,1500,1245,1278,123,6598,6547,6589,6999,7854,7562,5478,1200,1254,1562,5415,2587,4589) );

$chart = new open_flash_chart();
$chart->set_title( $title );
$chart->add_element( $bar );
$x = new x_axis();
$x->set_range( 0, 31, 1);   
$chart->set_x_axis($x);
  
 $chart->set_y_axis($x); 
 
 $y = new y_axis();
$y->set_stroke(3);
$y->set_colour( '#000000' );
$y->set_tick_length(7);
$y->set_grid_colour( '#000000' );
// grid steps:
$y->set_range( 0, 10000, 1000);

//$y_labels = new y_axis_labels();
//$y_labels->set_labels( array('Zero','One','Two','Three','Four','Five','Six','Seven','Eight') );
// visible labels steps:
//$y_labels->set_steps(4);
//$y->set_labels($y_labels);

//
// Add the Y Axis object to the chart:
//
$chart->set_y_axis( $y );
$chart->set_bg_colour('#FFFFCC'); 
 
//
// This is the VIEW section:
//
  echo $chart->toPrettyString();
?>