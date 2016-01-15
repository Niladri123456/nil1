<?php
include_once('db.php');
$col='c_country';
$cname='Year';


$q=mysql_query("select date(ts) as mnth, count(ts) as tot from tracker where year(ts)=2012 and month(ts)=7 and c_pageid=125 group by day(ts)");
$ss="['{$cname}','Pageviews'],";
while($p=mysql_fetch_array($q))
{
    $ss.= "['".$p['mnth']."',".$p['tot']."],";
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
          title: 'Company Performance',
          hAxis: {title: 'Day', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
HERE;
echo $TT;
?>
 <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
  </html>