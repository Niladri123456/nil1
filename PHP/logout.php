<?php
    session_start();
    session_destroy();
    $vr=<<<HERE
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Wait a moment....</title>
<meta http-equiv="REFRESH" content="3;url=http://www.indianwebanalyst.in/login.php"></HEAD>
<BODY><br /><br /><br /><br /><br /><br /><br /><center><h1> Logout Success!</h1><br /><br />This page will automatically refresh.<br /><br />If problem :<a href="login.php">Refresh</a> </center><br />

</BODY>
</HTML>
        
HERE;
   echo $vr;             
?>