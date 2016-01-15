<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dark Pro Theme, Free CSS Template</title>
<meta name="keywords" content="dark pro, theme, free templates, templatemo, website templates, CSS, HTML" />
<meta name="description" content="Dark Pro Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="scripts/wufoo.js"></script> 
<link href="css/structure.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/speechbubbles.css" />



<script src="js/speechbubbles.js" />


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
        
    <?php
    include_once('dbq.php');
    
    $a=$_POST['fname'];
    $b=$_POST['lname'];
    $c=$_POST['add1'];
    $d=$_POST['add2'];
    $e=$_POST['city'];
    $f=$_POST['state'];
    $g=$_POST['zip'];
    $h=$_POST['country'];
    $i=$_POST['contact'];
    $j=$_POST['email'];
    $k=$_POST['uname'];
    $l=$_POST['pass'];

    $q=getDataFromUserName($k,1);
    $mx=intval(getMaxId());
    $mx=$mx+1;
    $id=$mx;
    
    if ($q ='false'){
           $rnd=rand(1111,9999);      
 mysql_query("insert into users values(
 '".$k."',
 '".$l."',
 '".$a."',
 '".$b."',
 '".$c."',
 '".$d."',
 '".$e."',
 '".$f."',
 '".$g."',
 '".$h."',
 '".$i."',
 '".$rnd."',
 '0',
 '".$mx."',
 'NA',
 '".$j."')
 ");
        
        
        


        $to = $j;
$subject = "Email Verification Mail from Indian Web Analyst";
$message = "
<html>
<head>
<title>Email Verification</title>

</head>
<body>
<h1>Your verification code is <a href='http://www.indianwebanalyst.in/verify.php?id=".$id."&code=".$rnd."'>".$rnd."</a></h1>
<br />
<a href='http://www.indianwebanalyst.in/verify.php?id=".$mx."&code=".$rnd."'>Click here to verify.</a>   <br />
If this link not working just copy and paste it...<br /><br />
http://www.indianwebanalyst.in/verify.php?id=".$mx."&code=".$rnd." <br />


</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <noreply@indianwebanalyst.in>' . "\r\n";
$headers .= 'Cc: account@indianwebanalyst.in' . "\r\n";

$from = "noreply@indianwebanalyst.in";

mail($to,$subject,$message,$headers);


echo '<center>An account verification mail sent to your mail account [ '.$j.' ]<br /><br />Please verify your account and start your journey..</center>';
        
    }
    
    
   
?>
    
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />  
    
    <div id="templatemo_main">
        
     
        <div class="cleaner"></div>
    
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">

        
        <div class="cleaner"></div>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>