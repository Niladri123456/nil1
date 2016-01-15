<!DOCTYPE html>
<html>
    <head>
    <?php
    
        echo '<script type="text/javascript">alert("'.date("h:i:s").'");</script>'; 
?>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>jQuery UI Example Page</title>
        <link type="text/css" href="css/ui-darkness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
        <script type="text/javascript">
                    $(function(){

                // Accordion
                $("#accordion").accordion({ header: "h3" });

                // Tabs
                $('#tabs').tabs();

                // Dialog
                $('#dialog').dialog({
                    autoOpen: false,
                    width: 600,
                    buttons: {
                        "Ok": function() {
                            $(this).dialog("close");
                        },
                        "Cancel": function() {
                            $(this).dialog("close");
                        }
                    }
                });

                // Dialog Link
                $('#dialog_link').click(function(){
                    $('#dialog').dialog('open');
                    return false;
                });

                // Datepicker
                $('#datepicker').datepicker({
                    inline: true
                });

                // Slider
                $('#slider').slider({
                    range: true,
                    values: [17, 67]
                });

                // Progressbar
                $("#progressbar").progressbar({
                    value: 20
                });

                //hover states on the static widgets
                $('#dialog_link, ul#icons li').hover(
                    function() { $(this).addClass('ui-state-hover'); },
                    function() { $(this).removeClass('ui-state-hover'); }
                );

            });
        </script>
             <script type="text/javascript">
               function ss(){
                           var it=$("#itm").clone();
                          
                          $(it).css("visibility","visible");
                        //$(it).html('<p>dfgdfg</p>');       Its working so dont delete....
                        $(it).slideDown(1000); 
                        $(it).fadeIn(2000);
                        
                        $("#main").prepend(it);


               }
                   
               </script>
        </head>
        <body onload="return ss();">
        
        
              <div id="itm" style="position: relative;    background-image: url('c2.png');   width: 902px; height: 52px; visibility: hidden;" onclick="return ss();">
              <p style="position: relative; float: left; text-align: justify;   left: 20px; width: 140px;  "><font face="verdana" color="green" size="1">IP : 255.248.168.115</font>   </p>
              <p style="position: relative;float: left; text-align: justify;   left: 40px; width: 480px;  "><font face="verdana" color="green" size="1">IP : 255.248.168.115</font>   </p>
              <p style=" background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative; top: -10px; left: 56px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;"> Win 7</font>   </p>
              <p style=" background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative; top: -10px; left: 62px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">Win 7</font>   </p>
              <p style=" background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative; top: -10px; left: 66px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">Win 7</font>   </p>
              <p style=" background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative; top: -10px; left: 72px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">Win 7</font>   </p>
              
           
        </div>  
        
    <div id="main" style="width:910px;height: 572px; overflow: hidden;">

    </div>    
        
          
        </body>
        
        </html>