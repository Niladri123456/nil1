<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Themeroller-Ready jQuery UI Range Picker</title>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/themes/redmond/jquery-ui.css" type="text/css" />
        <link rel="stylesheet" href="css/ui.daterangepicker.css" type="text/css" />
        
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/json/json2.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>

<script type="text/javascript" src="js/date.js"></script>
<script type="text/javascript" src="js/daterangepicker.jQuery.js"></script>            
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js"></script>

         
<script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>    
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
        <script type="text/javascript">    
            $(function(){
                  $('#rangeA').daterangepicker(); 
                  $('#rangeBa, #rangeBb').daterangepicker(); 
                  $('#rangeC').daterangepicker({arrows: true}); 
                  $('#rangeD').daterangepicker(); 
                  $('#rangeE').daterangepicker({constrainDates: true}); 
             });
        </script>
        
        <!-- from here down, demo-related styles and scripts -->
        <!-- from here down, demo-related styles and scripts -->
        <link rel="shortcut icon" href="/images/favicon2.ico" type="image/x-icon" />
        <link href="/style/demoPages" media="screen" rel="Stylesheet" type="text/css" />

        <style type="text/css">
            body { font-size: 62.5%; }
            input {width: 196px; height: 1.1em; display:block;}
            h2 { clear: both; padding: 2em 0 0; }
            #rangeBa,#rangeBb { float: left; margin-right: 10px; }
        </style>
    </head>
    <body>

<h2>Default Rangepicker</h2>    
<div>
        <input type="text" value="4/23/99" id="rangeA" />            
</div>

<h2>2 inputs Rangepicker</h2>    
<div>
        <input type="text" value="4/23/99" id="rangeBa" />    
        <input type="text" value="4/23/99" id="rangeBb" />            
</div>
    
<h2>Rangepicker with arrows</h2>    
<div>
        <input type="text" value="4/23/99" id="rangeC" />            
</div>

<h2>Rangepicker opening to the right</h2>
<div style="float: right;">
        <input type="text" value="4/23/99" id="rangeD" />            
</div>

<h2>Rangepicker with contraints</h2>
<div>
        <input type="text" value="4/23/99" id="rangeE" />            
</div>


</html>


