<?php
session_start();
//echo $_SESSION['cp']."<br />";
include_once('db.php');
$col=$_GET['col'];
$cname=$_GET['cname'];
$dt=1;
if(isset($_GET['dt']))
$dt=$_GET['dt'];
$dateRange="";
$uid=$_SESSION['c_id'];
$pid="";
if (intval($dt)==1)
{
 $dateRange="DATE(ts) between CONVERT('2012-5-1',DATE) and CONVERT('".Date('Y-m-d')."',DATE) and c_pageid='".$_SESSION['cp']."'";   
}
else
{
    $dtt=explode(",", $dt);
     //$dateRange="'".$dtt[0]."' and '".$dtt[1]."'";
     $dateRange="DATE(ts) between CONVERT('".$dtt[0]."',DATE) and CONVERT('".$dtt[1]."',DATE) and c_id=".$uid." and c_pageid='".$_SESSION['cp']."'";
}


//echo "select {$col}, count({$col}) as tot from tracker where ".$dateRange." group by {$col} order by tot desc";
$q=mysql_query("select {$col}, count({$col}) as tot from tracker where ".$dateRange." group by {$col} order by tot desc");
$ss="['{$cname}','count'],";
while($p=mysql_fetch_array($q))
{
    $ss.= "['".$p[$col]."',".$p['tot']."],";
}
$ss=substr($ss,0,strlen($ss)-1);
//echo $ss;
$TT=<<<HERE
<html>
<head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          {$ss}
        ]);

        var options = {
          title: '{$cname}  Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
HERE;
echo $TT;
?>
 <body>

    <div id="chart_div" style="width: 780px; height: 500px;"></div>
  </body>
  </html>