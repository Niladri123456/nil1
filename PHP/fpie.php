<?php
ini_set('memory_limit', '-1');
$dt=1;
if(isset($_GET['dt']))
$dt=$_GET['dt'];
$dateRange="";
if (intval($dt)==1)
{
 $dateRange="DATE(ts) between CONVERT('2012-5-1',DATE) and CONVERT('".Date('Y-m-d')."',DATE)";   
}
else
{
    $dtt=explode(",", $dt);
         
     $dateRange="DATE(ts) between CONVERT('".$dtt[0]."',DATE) and CONVERT('".$dtt[1]."',DATE)"; 
} 
 $uid=$_GET['uid'];
 $field=$_GET['fld'];
 $ttl="Browser";
 
// echo $uid;
// echo $field;
// echo $ttl;
// echo "SELECT ".$field.", COUNT( ".$field." ) AS total FROM tracker WHERE c_id =  '".$uid."' and ".$dateRange." GROUP BY ".$field;
   
 include_once('db.php');
 
$q=mysql_query("SELECT ".$field.", COUNT( ".$field." ) AS total FROM tracker WHERE c_id =  '".$uid."' and ".$dateRange." GROUP BY ".$field); 



include 'php-ofc-library/open-flash-chart.php';

$title = new title($ttl);
  $tmp=0;    
while($row=mysql_fetch_array($q))    {
    $tmp = new pie_value(intval($row['total']), "");
//
// this slice would normally be light green
// but we are overriding the colour here:
//
//$tmp->set_colour( '#'.$i.'F'.$i.'3C'.$i );
$tmp->set_label($row[$field], '#BFFF00', 10 );
$d[] = $tmp;
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