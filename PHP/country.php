<?php
ini_set('memory_limit', '-1');
$dt=1;
if(isset($_GET['dt']))
$dt=$_GET['dt'];
$dateRange="";
if (intval($dt)==1)
{
 $dateRange="DATE(ts) between CONVERT('20012-5-1',DATE) and CONVERT('".Date('Y-m-d')."',DATE)";   
}
else
{
    $dtt=explode("-", $dt);
     $dateRange="'".$dtt[0]."' and '".$dtt[1]."'";
}
//echo   $dateRange;
include 'php-ofc-library/open-flash-chart.php';

$title = new title('Browser Stat');
  
include_once('db.php');
$q=mysql_query("select distinct c_color from tracker");
 $ii=0;              
$br=array();
while($row=mysql_fetch_array($q))
{
    $br[]=$row['c_color'];
$ii=$ii+1;
//echo  $row['c_browser'];
 }
 /*
$br[]="Windows";
$br[]="Linux";
$br[]="Mac";
$br[]="Android";
$br[]="Unix";
$br[]="Others";
   */

$brval=array();
$kk=0;
 //   print ("select count(c_browser)as tot from tracker where c_id=1234 and c_browser='".$br[$kk]."' and ".$dateRange);
while($kk<$ii)
{

    $q1=mysql_query("select count(c_browser)as tot from tracker where c_id=1234 and c_color='".$br[$kk]."' and ".$dateRange);
$row1=mysql_fetch_array($q1);
 $brval[]= $row1['tot'];
  $kk=$kk+1;
 // echo $row1['tot'];
}
/*
$brval[]=620;
$brval[]=350;
$brval[]=470;
$brval[]=134;
$brval[]=267;
$brval[]=534;
*/
  $tmp=0;
$d = array();
   for($i=0;$i<$ii;$i++){
       
   
$tmp = new pie_value(intval($brval[$i]), "");
//
// this slice would normally be light green
// but we are overriding the colour here:
//
//$tmp->set_colour( '#'.$i.'F'.$i.'3C'.$i );
$tmp->set_label($br[$i]." Bit", '#BFFF00', 10 );
$d[] = $tmp;
//
// here the colour cycle wraps and this gets the
// first colour:
//
 } 

$pie = new pie();
$pie->start_angle(35)
    ->add_animation( new pie_fade() )
    ->add_animation( new pie_bounce(4) )
    // ->label_colour('#432BAF') // <-- uncomment to see all labels set to blue
    ->gradient_fill()
    ->tooltip( '#val# of #total#<br>#percent# of 100%' )
    ->colours(
        array(
        '#B8001F',    // <-- blue
            '#4400A4',    // <-- grey
            '#CD6600',    // <-- green
            '#E6FE00',    // <-- light green
            '#007ED5',
            '#54E300'    // <-- light green
        ) );

$pie->set_values( $d );

$chart = new open_flash_chart();
$chart->set_title( $title );
$chart->add_element( $pie );
$chart->set_bg_colour('#AB4800');
echo $chart->toPrettyString();
?>