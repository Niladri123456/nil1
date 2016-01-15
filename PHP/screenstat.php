<?php

    include_once('script.php');
    $k=<<<HERE
    <link rel="stylesheet" href="css/ui.daterangepicker.css" type="text/css" /> 
<link type="text/css" href="css/ui-darkness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />       
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script> 
<script type="text/javascript">
jQuery.noConflict();
$('#date3').DatePicker({
    flat: true,
    date: ['2008-07-28','2008-07-31'],
    current: '2008-07-31',
    calendars: 3,
    mode: 'range',
    starts: 1
});

function ref(){
             jQuery.noConflict();
            
           var dt1=jQuery('#date3').DatePickerGetDate(true);
           var dt=escape(dt1);
           var path="http://www.indianwebanalyst.in/gpie.php?cname=Screen%20Resolution&col=c_resolution&dt="+dt;
           
           
           document.getElementById('chart').src=path;
           }
</script>  

  
HERE;
    
    createAuthHeader('Browser Statictis | IndianWebAnalyst',$k);
    
?>

  <center>  <div id="date3" >
  
  
  </div>
  
  <input type="button" value="Refresh" onclick="return ref();"/><br />
  <iframe id="chart" src="http://www.indianwebanalyst.in/gpie.php?cname=Screen%20Resolution&col=c_resolution" width="800" height="520">
  
  
  </iframe>
  </center>

<?php
    createFooter();
?>