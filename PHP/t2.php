<?php
session_start();
$_SESSION['site']='1234';    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>X10Hosting hosted!!!</title>
<meta name="keywords" content="dark pro, theme, free templates, templatemo, website templates, CSS, HTML" />
<meta name="description" content="Dark Pro Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/ui-darkness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
        <script type='text/javascript' src='trc.js' />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

  <script type="text/javascript">
  
                  function ss(id){
                    //alert('insert ss()');
                    var d = new Date;
                    var now=d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
                    
                   // alert(now);
                    
                    
                    
                    
                    
                    
                    var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   // document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    
      //alert(xmlhttp.responseText);
  
   var it=$("#itm").clone();
   
  // $(it).$("#ip").text("Hello");
                          
                          $(it).css("visibility","visible");
                       $(it).html(xmlhttp.responseText);    
                        $(it).slideDown(1000); 
                        $(it).fadeIn(2000);
                        
                        $("#main").prepend(it);
    
                        
    }
  }
xmlhttp.open("GET","getlast.php?lst="+id,true);
xmlhttp.send();




}
  
  
  
  function strt(){
      setInterval("ckeckLast()",10000);
  }
  
         function ckeckLast(){ 
              // alert('Into ...');
          var xhr;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xhr=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xhr=new ActiveXObject("Microsoft.XMLHTTP");
  }
xhr.onreadystatechange=function()
  {
  if (xhr.readyState==4 && xhr.status==200)
    {
   // document.getElementById("myDiv").innerHTML=xhr.responseText;
    
      //alert(xhr.responseText);
     // alert(xhr.responseText);
     var c=parseInt(xhr.responseText);
     var l= parseInt(document.getElementById('mxid').value);
     
   //  alert(c);
    // alert(l);
     
        if(l<c){
          // alert('Database updated!');
          ss(l+1);
          document.getElementById('mxid').value=(l+1);
            
        }
                        
    }
  }
xhr.open("GET","lid.php",true);
xhr.send();



  
             
             
         }

 
             
                   
               </script>
               
</head>

<body onload="return strt();">
 <input type="hidden" name="lst" id="lst">
 <input type="hidden" id="mxid" value="
 <?php
   include_once('db.php');
   $row=mysql_fetch_array(mysql_query("select max(track_id)as mx from tracker"));
   echo $row['mx'];
 ?>
 
 ">
<div id="templatemo_wrapper">
    
    <div id="templatmeo_header">
        <div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- END of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home<span>Start here</span></a></li>
            <li><a href="about.html">About<span>Who we are</span></a>
                <ul>
                    <li><a href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                    <li><a href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                    <li><a href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                </ul>
            </li>
            <li><a href="portfolio.html">Portfolio<span>What we have done</span></a>
                <ul>
                    <li><a href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                    <li><a href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                    <li><a href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                    <li><a href="http://www.templatemo.com/page/4">Sub menu 4</a></li>
                    <li><a href="http://www.templatemo.com/page/5">Sub menu 5</a></li>
               </ul>
            </li>
            <li><a href="blog.html">Blog<span>Our latest news</span></a></li>
            <li><a href="contact.html">Contact<span>Get to us</span></a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- END of menu -->
         <?php
    include_once('sc.php');
    $s=countryCityFromIP("217.205.165.44");
?>
<div id="itm" style="position: relative;    background-image: url('c2.png');   width: 902px; height: 52px; visibility: hidden;" onclick="return ss();">
              <p id="ip" style="position: relative; top:20px; float: left; text-align: justify;   left: 20px; width: 140px;  "><font face="verdana" color="green" size="1">115.265.154.51</font>   </p>
              <p id="reffer" style="position: relative;top:20px; float: left; text-align: justify;   left: 40px; width: 480px;  "><font face="verdana" color="green" size="1"></font>   </p>
              <p id="browser" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 56px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;"></font>   </p>
              <p id="os" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 62px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;"></font>   </p>
              <p id="resolution" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 66px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">Win 7</font>   </p>
              <p id="color" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 72px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">Win 7</font>   </p>
              
           
        </div>  
        
    <div id="main" style="width:910px;height: 572px; overflow: hidden;">

    </div>    
    
    <div id="templatemo_main">
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/visitor.png" alt="Image 01" /> <a href="#">Visitor Tracking</a></h2>
            <p>Nullam consectetur varius risus, a lobortis ipsum auctor at. Aenean bibendum vulputate libero ac sagittis.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/counter.png" alt="Image 02" /><a href="#">Web Counter</a></h2>
            <p>Duis egestas, magna at iaculis pulvinar, leo est elementum sapien leo elit sit, id vestibulum eros elit at purus.</p>
        </div>
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s2"><img src="images/notebook-32px.png" alt="Image 03" /><a href="#">SEO Tips</a></h2>
            <p>Ut rhoncus rhoncus mauris, varius venenatis nibh consequat ac. Duis nec velit eros, eu scelerisque lacus.</p>
        </div>
        <div class="col one_fourth no_margin_right fp_services">
            
            <h2 class="s3"><img src="images/ip.png" alt="Image 04" /><a href="#">IP Tracking</a></h2>
            <p>Etiam sodales feugiat turpis et dapibus. Vestibulum adipiscing convallis tortor sit amet dignissim. Duis nec velit accumsan.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/support.png" alt="Image 05" /><a href="#">Support</a></h2>
            <p>Pellentesque suscipit velit at dui egestas porta. Maecenas quis metus ac nulla pretium eleifend dolor mi.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/chat1.png" alt="Image 06" /><a href="#">Live Chat</a></h2>
            <p>Aenean ante nunc, bibendum non lobortis id, viverra eu diam. Cras sed commodo lectus in ultrices eget vitae dui. </p>
        </div>
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s2"><img src="images/query.png" alt="Image 07" /><a href="#">MIS Query</a></h2>
            <p>Ut metus urna, rhoncus vitae venenatis consequat, pulvinar vitae ante. Mauris eu sapien in nulla rhoncus nec ut leo.</p>
        </div>
        <div class="col one_fourth no_margin_right fp_services">
            
            <h2 class="s3"><img src="images/performance.png" alt="Image 08" /><a href="#">High Performence</a></h2>
            <p>Mauris lobortis lorem at mi tincidunt id magna neque dapibus. Duis in condimentum odio auctor. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>
        
        <div class="cleaner"></div>
    
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        <div class="col one_third">
            <h4>Flickr</h4>
            <ul class="flickr_stream">
                <li><a href="#"><img src="images/01.png" alt="Flickr 01" /></a></li>
                <li><a href="#"><img src="images/02.png" alt="Flickr 02" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="images/03.png" alt="Flickr 03" /></a></li>
                <li><a href="#"><img src="images/04.png" alt="Flickr 04" /></a></li>
                <li><a href="#"><img src="images/05.png" alt="Flickr 05" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="images/06.png" alt="Flickr 06" /></a></li>
                 <li><a href="#"><img src="images/03.png" alt="Flickr 07" /></a></li>
                <li><a href="#"><img src="images/04.png" alt="Flickr 08" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="images/02.png" alt="Flickr 09" /></a></li>
            </ul>  
        </div>
        
        <div class="col one_third">
 
        </div>
        
        <div class="col one_third no_margin_right">
            <h4>Follow Us</h4>
            <p><a href="http://www.templatemo.com" target="_parent">Dark Pro Theme</a> is free css template provided by <a href="http://www.templatemo.com">templatemo.com</a> for your personal or commercial websites. Sed vestibulum ipsum ac odio dictum tincidunt. Etiam feugiat turpis semper lectus eget diam porta iaculis.</p>
            
            <div class="cleaner h20"></div>
            <div class="footer_social_button">
                <a href="#"><img src="images/facebook.png" title="Facebook" alt="Facebook" /></a>
                <a href="#"><img src="images/flickr.png" title="Flickr" alt="Flickr" /></a>
                <a href="#"><img src="images/twitter.png" title="Twitter" alt="Twitter" /></a>
                <a href="#"><img src="images/youtube.png" title="Youtube" alt="Youtube" /></a>
                <a href="#"><img src="images/feed.png" title="RSS" alt="RSS" /></a>
            </div>
            
            Copyright © 2048 <a href="#">Your Company Name</a> <br /> 
            <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by 
            <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
            <br />
            <img src="http://www.indianwebanalyst.in/ttoi.php?cid=free_111" alt="Free Hit Counter">
            <div class="cleaner"></div>
        </div>
            
        <div class="cleaner"></div>
        <?php
    for($i=44;$i<90;$i++)
   // echo '<img src="http://www.indianwebanalyst.in/ttoi.php?cid=free_111&fnt='.$i.'" alt="Hit counter">';
?>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>