<?php
session_start();
   
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


<script src='http://www.indianwebanalyst.in/trc_js.php?c=1&amp;d=123' type='text/javascript'>               
</script>
</head>

<body>

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
        
        <div style="border: .1em solid white; background: white;"> 

    <?php
include('ip2locationlite.class.php');
 
//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('bfa4c5277fd57f155bc2304f445032602af56229574da720fc6cbfdf4e90bdc3');
 
//Get errors and locations
$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
echo  $locations['cityName'];
$errors = $ipLite->getError();
 
//Getting the result
echo "<p>\n";
echo "<strong>First result</strong><br />\n";
if (!empty($locations) && is_array($locations)) {
  foreach ($locations as $field => $val) {
    echo $field . ' : ' . $val . "<br />\n";
  }
}
echo "</p>\n";
 
//Show errors
echo "<p>\n";
echo "<strong>Dump of all errors</strong><br />\n";
if (!empty($errors) && is_array($errors)) {
  foreach ($errors as $error) {
    echo var_dump($error) . "<br /><br />\n";
  }
} else {
  echo "No errors" . "<br />\n";
}
echo "</p>\n";
?>
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
            <h4>Twitter</h4>
            <ul class="twitter_post">
                <li>Suspendisse at scelerisque urna. Aenean tincidunt velit at dui massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
                <li>Proin dignissim, diam nec <a href="#">@TemplateMo</a> enim lorem tempus orci, ac imperdiet ante purus in justo.</li>
                <li>Fusce cursus consectetur ultricies <a href="#">http://bit.ly/34sdPo</a> uis lectus, ut elementum id, fermentum sed erat. </li>
            </ul>
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

    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>