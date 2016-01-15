<?php
session_start();
if(!isset($_SESSION['s1'])){
header('location:login.php');
}
    include_once('dbq.php');
    $a=$_POST['webadd'];
    $b=$_POST['webdesc'];
    $c=$_POST['webcat'];
    $d=$_POST['websubcat'];
    $e=$_POST['webkey'];
   
           
    mysql_query("insert into sites(c_id,s_description,s_catagory,s_keywords,s_address) values('".$_SESSION['s14']."','".$b."','".$c." ---> ".$d."','".$e."','".$a."')");
    $row=mysql_fetch_array(mysql_query("select max(s_id) as mx from sites"));
     echo $_SESSION['s16'];
     $to =$_SESSION['s16'] ;
$subject = "Website added successfully!";
$message = "
<html>
<head>
<title>Site Preistration</title>

</head>
<body>
<h1><a href='{$a}'>{$a}</a></h1>
<br />
Dear, {$_SESSION['s3']}<br />
Your website is successfully added to our database.
<br /><br />
Now you just have to add our tracking code into the head section of all the pages your site have.
<br />
Tracking Code : 
<pre>
&lt;script src='http://www.indianwebanalyst.in/trc_js.php?c={$_SESSION['s14']}&d={$row['mx']}' type='text/javascript'&gt; &lt;/script&gt;
</pre>
<br />
Just copy and paste the script tag into the head section of a page.... Thats all...<br />
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


echo '<center>An Email sent to your mail account [ '.$to.' ]<br /><br /></center>';
        


 
  
    
    
    
?>