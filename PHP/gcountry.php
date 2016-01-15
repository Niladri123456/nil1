<?php
session_start();
include_once('db.php');
$col='c_country';
$cname='Country';
$uid=$_SESSION['c_id'];
$dt=1;
if(isset($_GET['dt']))
$dt=$_GET['dt'];
$dateRange="";
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
$ss="['{$cname}','Popularity'],";
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
  <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
     google.load('visualization', '1', {'packages': ['geochart']});
     google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          {$ss}

        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    };
    </script>
</head>
HERE;
echo $TT;
?>
 <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
  </html>