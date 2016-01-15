<?php

//
// This is the MODEL section:
//

include('php-ofc-library/open-flash-chart.php');

ini_set('memory_limit', '-1');
$dt=1;
if(isset($_GET['dt']))
$dt=$_GET['dt'];
$br="Unknown";
if(isset($_GET['dt']))
$br=$_GET['br'];


$dateRange="";
if (intval($dt)==1)
{
 $dateRange="DATE(ts) between CONVERT('2012-5-1',DATE) and CONVERT('".Date('Y-m-d')."',DATE)";   
}
else
{
    $dtt=explode("-", $dt);
$dateRange="DATE(ts) between CONVERT('".$dtt[0]."',DATE) and CONVERT('".$dtt[1]."',DATE)";
}

$title = new title("Page Views using ".$br." browser between date ".$dt);

$bar = new bar_glass(55, '#D54C78', '#C31812');
 include_once('db.php');
  
  
 $q=mysql_query("select count(c_browser) as tot from tracker where c_id=1234 and c_browser='".$br."' and ".$dateRange);
 
 



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