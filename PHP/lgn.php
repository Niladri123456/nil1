<?php
session_start();
//session_destroy();
    include_once('dbq.php');
    include_once('db.php');
    
    $a=$_POST['uname'];
    $b=$_POST['pass'];
    
    $p=getDataFromUserName($a,2);
    if($p==$b)
    {    
       
        $row=mysql_fetch_array(mysql_query("select * from users where uname='".$a."' "));
        
        $_SESSION['c_id']=$row['member_id']; 
        $_SESSION['12']=getDataFromUserName($a,12); 
       $_SESSION['14']=getDataFromUserName($a,14); 
       $q=mysql_fetch_array( mysql_query("select * from sites where c_id='".$_SESSION['s14']."'"));
        $_SESSION['cp']=$q['s_id'];
    $_SESSION['16']=getDataFromUserName($a,16);
                   if ($_SESSION['12']!='Verified')
        {
            
            $to =$_SESSION['16'];
$subject = "Email Verification Mail from Indian Web Analyst";
$message = "
<html>
<head>
<title>Email Verification</title>

</head>
<body>
<h1>Your verification code is <a href='http://www.indianwebanalyst.in/verify.php?id=".$_SESSION['14']."&code=".$_SESSION['12']."'>".$_SESSION['12']."</a></h1>
<br />
<a href='http://www.indianwebanalyst.in/verify.php?id=".$_SESSION['14']."&code=".$_SESSION['12']."'>Click here to verify.</a>   <br />
If this link not working just copy and paste it...<br /><br />
http://www.indianwebanalyst.in/verify.php?id=".$_SESSION['14']."&code=".$_SESSION['12']." <br />


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

            

            
            echo "<center>Your account is not activated!<br /><br />We send a verification email. Please verify your account first!<br /><br />Verification email Sent.</center>";
            }
            else
            {
        $_SESSION['s1']=getDataFromUserName($a,1);
        $_SESSION['s2']=getDataFromUserName($a,2);
        $_SESSION['s3']=getDataFromUserName($a,3);
        $_SESSION['s4']=getDataFromUserName($a,4);
        $_SESSION['s5']=getDataFromUserName($a,5);
        $_SESSION['s6']=getDataFromUserName($a,6);
        $_SESSION['s7']=getDataFromUserName($a,7);
        $_SESSION['s8']=getDataFromUserName($a,8);
        $_SESSION['s9']=getDataFromUserName($a,9);
        $_SESSION['s10']=getDataFromUserName($a,10);
        $_SESSION['s11']=getDataFromUserName($a,11);

        $_SESSION['s13']=getDataFromUserName($a,13);
        $_SESSION['s14']=getDataFromUserName($a,14);
        $_SESSION['s15']=getDataFromUserName($a,15);
        $_SESSION['s16']=getDataFromUserName($a,16); 
         
        
        //header('location:userarea.php');
        $vr=<<<HERE
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Wait a moment....</title>
<meta http-equiv="REFRESH" content="5;url=http://www.indianwebanalyst.in/userarea.php"></HEAD>
<BODY><br /><br /><br /><br /><br /><br /><br /><center><h1> Login Success!</h1><br /><br />This page will automatically refresh.<br /><br />If problem :<a href="userarea.php">Refresh</a> </center><br />

</BODY>
</HTML>
        
HERE;
   echo $vr;             
            }
        

        
    }
    else{
        header('location:login.php');        
    }
    
    
    
    
?>