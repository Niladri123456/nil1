<?php
session_start();
$_SESSION['site']='1234';    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stat for your Website</title>
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />  
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/ui.daterangepicker.css" type="text/css" /> 
<link type="text/css" href="css/ui-darkness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />       
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
     


<script type="text/javascript" src="../js/json/json2.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>           
 



<meta name="keywords" content="stat, live stat, web stat, counter" />
<meta name="description" content="Different stat for website" />
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
</script>


<script type="text/javascript">
function ref(){
             jQuery.noConflict();
            
           var dt=jQuery('#date3').DatePickerGetDate(true);
    

swfobject.embedSWF("open-flash-chart.swf", "my_chart2","900", "700", "9.0.0", "expressInstall.swf",{"data-file":"os.php?dt="+dt} );  

}
 
swfobject.embedSWF("open-flash-chart.swf", "my_chart2","900", "700", "9.0.0", "expressInstall.swf",{"data-file":"os.php?dt=1"} );  

</script>

               
</head>

<body>

<div id="templatemo_wrapper">
 <div style="width: 100%; height: 30px;">
 <a href="#">  Home </a> |
 <a href="#">  Live Stat </a> |
 <a href="#">  Browser Analysis </a> |
 <a href="#">  OS Analysis </a> |
 <a href="#">  Country Analysis </a> |
 <a href="#">  Language Analysis </a> |
 <a href="#">  Screen Analysis </a> |
 <a href="#">  Color Depth Analysis </a> |
 <a href="#">  Account </a> |
 <a href="#">  Logout </a> |
 </div>
     
  

  <center>  <div id="date3" >
  
  
  </div>
  
  <input type="button" value="Refresh" onclick="return ref();">
  
  </center>
 

  
    <div style="background-color: #E4C4F5; border: .1em solid white; padding-left: 4px; padding-top: 5px;"> 
        
<div id="my_chart2" style="float: left; z-index:33332;"></div>
  <br />
    </div>

            
 
 
 
 
 
 
 
 
    
    <div id="templatemo_main">
        

        
        <div class="cleaner"></div>
    
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
Hello World!
            
        <div class="cleaner"></div>
        <?php
    for($i=44;$i<90;$i++)
   // echo '<img src="http://www.indianwebanalyst.in/ttoi.php?cid=free_111&fnt='.$i.'" alt="Hit counter">';
?>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>
