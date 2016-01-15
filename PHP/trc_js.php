<?php

$cid=$_GET['c'];
$pid=$_GET['d'];
    $k=<<<HERE


  var cidx={$cid};
  function sendReq(cid){
        // alert('hh');
        cid=cidx;
    var br=navigator.appName;
      var OSName="Unknown OS";
if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
if (navigator.appVersion.indexOf("Android")!=-1) OSName="Android";
if (navigator.appVersion.indexOf("Iphone")!=-1) OSName="Iphone";
var reff="Direct";
if (document.referrer != '')
reff =document.referrer;
 var reso=screen.width+"x"+screen.height;
      
  var lang = window.navigator.userLanguage || window.navigator.language;    
   var depth = screen.colorDepth;   
    
    
var ss1 = document.createElement('script');

ss1.setAttribute("type", "text/javascript");
ss1.setAttribute("src", "http://www.indianwebanalyst.in/track.php?aa="+escape(reff)+"&a="+cid+"&b="+br+"&c="+OSName+"&d="+reso+"&e="+lang+"&f="+depth+"&g={$pid}");
var hh1 = document.getElementsByTagName('head')[0];
hh1.appendChild(ss1);
  

  }
  
window.onload = sendReq; 



    
HERE;

echo $k;
?>
  