<?php
session_start();
    function createHeader($something='',$title='IndianWebAnalyst Online website stat analysis.')
    {
$xx=<<<HERE
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<meta name="keywords" content="dark pro, theme, free templates, templatemo, website templates, CSS, HTML" />
<meta name="description" content="Dark Pro Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

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

ddsmoothmenu.init({
    mainmenuid: "templatemo_menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){    
        var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
                        next:$('#lofslidecontent45 .lof-next') };
                        
        $obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
                                                direction        : 'opacitys',    
                                                 easing            : 'easeInOutExpo',
                                                duration        : 1200,
                                                auto             : false,
                                                maxItemDisplay  : 4,
                                                navPosition     : 'horizontal', // horizontal
                                                navigatorHeight : 32,
                                                navigatorWidth  : 80,
                                                mainWidth:940,
                                                buttons            : buttons} );    
    });
</script>

{$something}
 
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
            <li><a href="index.php" class="selected">Home<span>Start here</span></a></li>
            <li><a href="register.php">Register<span>New account</span></a></li>
            <li><a href="login.php">Login<span>Your account</span></a></li>
            <li><a href="aboutus.php">About Us<span>Who we are</span></a></li>
            <li><a href="contactus.php">Contact<span>Get to us</span></a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- END of menu -->
        <div id="templatemo_main">

HERE;

echo $xx;
    }
    function createSlider(){
        
$yy=<<<HER
    <div id="templatemo_slider">
        <div id="lofslidecontent45" class="lof-slidecontent" style="width:940px; height:340px;">
    <div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
  <div class="lof-main-outer" style="width:940px; height:340px;">
      <ul class="lof-main-wapper">
          <li>
            <img src="images/slider/thumbl_980x340.png" title="Newsflash 1" alt="Slider 01" />           
            <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 1" href="#Category-1">/ Newsflash 1 /</a> <i> — Monday, February 25, 2048 18:25</i></h3>
                <h2>Template 2.5 version released</h2>
                <p>One thing about Web Design, it always changes! Template makes it easy to edit buttons, pages, contents, etc...
                <a class="readmore" href="#">Read more </a>
                </p>
            </div>
        </li> 
       <li>
             <img src="images/slider/thumbl_980x340_002.png" title="Newsflash 2" alt="Slider 02" />           
               <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 2" href="#Category-2">/ Newsflash 2 /</a>     <i> — Sunday, February 24, 2048 11:08</i></h3>
                <h2>Template Design packs updated</h2>
                <p>Template makes it easy to launch a Web site of any kind. Whether you want a brochure site or you are...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
       <li>
             <img src="images/slider/thumbl_980x340_003.png" title="Newsflash 3" alt="Slider 03" />            
              <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 3" href="#Category-3">/ Newsflash 3 /</a>     <i> — Tuesday, February 19, 2048 09:50</i></h3>
                <h2>Free Template extensions available</h2>
                <p>With a library of thousands of free templates, you can add what you need as your site grows. Don't...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        
        <li>
            <img src="images/slider/thumbl_980x340_004.png" title="Newsflash 4" alt="Slider 04" />            
              <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 4" href="#Category-4">/ Newsflash 4 /</a>    <i> — Sunday, February 17, 2048 20:40</i></h3>
                <h2>Free Web Design tips</h2>
                <p>Sed pretium fermentum tellus id feugiat. Quisque in congue ante. Aliquam pretium condimentum orci vel consequat...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        
        <li>
            <img src="images/slider/thumbl_980x340_005.png" title="Newsflash 5" alt="Slider 05" />            
              <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 5" href="#">/ Newsflash 5 /</a>    <i> — Monday, February 11, 2048 11:48</i></h3>
               <h2>Try CSS for free</h2>
                <p>Nam odio dolor, tincidunt id ornare sit amet, dignissim sed risus. Nam tortor mi, eleifend ut hendrerit sit amet...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        
        <li>

            <img src="images/slider/thumbl_980x340_006.png" title="Newsflash 6" alt="Slider 06" />            
              <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 6" href="#">/ Newsflash 6 /</a>    <i> — Sunday, February 10, 2048 13:36</i></h3>
                <h2>Getting to know about dedicated server</h2>
                <p>Pellentesque sit amet ipsum nibh. Pellentesque cursus eleifend tempus. Fusce augue nisl, pretium id, porta quis nisl...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        <li>
            <img src="images/slider/thumbl_980x340_007.png" title="Newsflash 7" alt="Slider 07" />            
              <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 7" href="#">/ Newsflash 7 /</a>    <i> — Friday, February 08, 2048 10:22</i></h3>
                <h2>How to be aware of free subdomains</h2>
                <p>Donec commodo elit eu nunc varius viverra. Donec gravida orci quis semper sapien arcu faucibus commodo...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        <li>
            <img src="images/slider/thumbl_980x340_008.png" title="Newsflash 8" alt="Slider 08" />            
              <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 8" href="#">/ Newsflash 8 /</a>    <i> — Wednesday, February 04, 2048 17:28</i></h3>
                <h2>SSL security professionals</h2>
                <p>Cras tincidunt turpis ut ligula vestibulum interdum. Vestibulum semper sapien ut risus posuere interdum...
                    <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
      </ul>      
    </div>
    <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
    <div class="lof-navigator-wapper">

        <div onclick="return false" class="lof-next">Next</div>
        <div class="lof-navigator-outer">
            <ul class="lof-navigator">
               <li><img src="images/slider/thumbs/thumbl_980x340.png" alt="Image 01" /></li>
               <li><img src="images/slider/thumbs/thumbl_980x340_002.png" alt="Image 01" /></li>
               <li><img src="images/slider/thumbs/thumbl_980x340_003.png" alt="Image 02" /></li>
               <li><img src="images/slider/thumbs/thumbl_980x340_004.png" alt="Image 03" /></li>    
               <li><img src="images/slider/thumbs/thumbl_980x340_005.png" alt="Image 04" /></li>
               <li><img src="images/slider/thumbs/thumbl_980x340_006.png" alt="Image 05" /></li>       
               <li><img src="images/slider/thumbs/thumbl_980x340_007.png" alt="Image 06" /></li>       
               <li><img src="images/slider/thumbs/thumbl_980x340_008.png" alt="Image 07" /></li>               
            </ul>
        </div>
        <div onclick="return false" class="lof-previous">Previous</div>
    </div> 
    
 </div> 
<script type="text/javascript">

</script>    
    </div>
HER;
echo $yy; 
    }
    
    
    function createFooter(){
$footer=<<<HERE
    <div class="cleaner"></div>
    
    </div> <!-- END of main -->
    

</div> <!-- END of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        <div class="col one_third" style="backgroung-color:white;">
          <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FIndianWebAnalyst&amp;width=298&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:298px; height:290px;" allowTransparency="true"></iframe>
        </div>
        
        <div class="col one_third">
            <h4>Twitter</h4>
            <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('IndianWebAnalys').start();
</script>
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
            
            <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>
HERE;
        
    echo $footer;    
    }
    
    function createAuthHeader($title='IndianWebAnalyst Online website stat analysis.',$extra=''){
$f=<<<HERE
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<script src="scripts/wufoo.js"></script> 
<link href="css/structure.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">
<meta name="keywords" content="dark pro, theme, free templates, templatemo, website templates, CSS, HTML" />
<meta name="description" content="Dark Pro Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/ui-darkness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
        <script type='text/javascript' src='trc.js' />




<script type="text/javascript" src="js/jquery.min.js"></script>


{$extra}


               
</head>

<body >
 
 
<div id="templatemo_wrapper">
    
   <div style="width: 100%; height: 30px;">
 <a href="userarea.php">  Home </a> |   
 <a href="regsite.php">  Add a Website </a> |   
 <a href="livestat.php">  Live Stat </a> |
 <a href="browserstat.php">  Browser Analysis </a> |
 <a href="osstat.php">  OS Analysis </a> |
 <a href="countrystat.php">  Country Analysis </a> |
 <a href="languagestat.php">  Language Analysis </a> |
 <a href="screenstat.php">  Screen Analysis </a> |
 <a href="colorstat.php">  Color Analysis </a> |
 <a href="logout.php">  Logout </a> |
 </div>
 
HERE;
 echo $f;  
 ?>
 <script type="text/javascript">
       function ch(ctrl){ 
              // alert('Into ...');
               var x = ctrl.options[ctrl.selectedIndex].value;
               
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
//alert('Session Changed'+xhr.responseText);
    }
  }
xhr.open("GET","sessionset.php?d="+x,true);
xhr.send();


ref();
  
             
             
         }
 </script>
 <center>
 Live stat for the site : 
     <select id="site" name="site" onchange="return ch(this);">
     <?php
    include_once('db.php');
    $q=mysql_query("select * from sites where c_id='".$_SESSION['s14']."'");  //Here c_id will be track from $_SESSION['cid'] OK.
    while($row=mysql_fetch_array($q)){
       // echo  $_SESSION['site1'];
      //  echo $row['s_address'];
        if (intval($_SESSION['site1'])==intval($row['s_id'])){
        echo '<option selected="selected" value="'.$row['s_id'].'">'.$row['s_address'].'</option>';    
        }
        else
        {
            echo '<option value="'.$row['s_id'].'">'.$row['s_address'].'</option>';
        }
        
    }
?>
     

     </select>
     </center>
 <?php     
    }
    
?>