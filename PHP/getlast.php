<?php
session_start();
//if(!isset($_SESSION['s1'])){
//header('location:login.php');
//}
    $sit=$_SESSION['site1'];
   $lst=$_GET['lst'];
    
     // echo "ok";
    //  exit();
   // echo $sit."--->";
   // echo $lst;
    
    
   // echo "select * from tracker where c_id='".$_SESSION['s14']."' and track_id=".$lst." and c_pageid='".$sit."'";
    include_once('db.php');
    $q=mysql_query("select * from tracker where c_id='".$_SESSION['s14']."' and track_id=".$lst." and c_pageid='".$sit."'");
           while($row=mysql_fetch_array($q)){
              // echo $row['c_ip'];
            if(strlen($row['c_ip'])<2)  {
                exit();
            }
           echo makeEle($row['c_ip'],$row['c_browser'],$row['c_os'],$row['c_reffer'],$row['c_language'],$row['c_color'],$row['c_resolution'],$row['c_city'],$row['c_country'],$row['c_state']); 
           exit();   
          }
    
    
     //  echo $content;
    
    
    
    
    
   
    
    
    function makeEle($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
        

//$ipinfo="USA";
if(strlen($d)>100){
    $d=substr($d,100)."....";
}
$img;
if($b=="Netscape"){
    $img='/imgs/browser/browsers_chrome.gif';
}
else if ($b="MSIE"){
  $img='/imgs/browser/browsers_msie.gif'; 
  $b="MS IE";
}


$osimg;
if($c=="Windows"){
    $osimg='/imgs/os/os_win.gif';
}
else if ($c=="Android"){
  $osimg='/imgs/os/os_android.gif';   
}
else if ($c=="Iphone"){
  $osimg='/imgs/os/os_iphone.gif';   
}
else if ($c=="Linux" || $c=="UNIX"){
  $osimg='/imgs/os/os_linux.gif';   
}
else if ($c=="MacOS"){
  $osimg='/imgs/os/os_mac.gif';   
}
   
 $lnk=' target="_blank" href="'.$d.'"';  
 if(strlen($d)<10)  {
$lnk='href="#"'; 
 }

   
   
       
        
    $vv=<<<HERE



              <p style="vertical-align:text-middle;line-height:95%;overflow: hidden; position: relative; top:10px; float: left; text-align: center;   left: 5px; width: 200px;  "><font face="verdana" color="green" size="1" style="overflow: hidden;">{$a}<br />{$h}, {$j}, {$i}</font>   </p>
              
              
              <p style="line-height:95%;position: relative;top:10px; float: left; text-align: center;   left: 20px; width: 380px;  "><font face="verdana" color="green" size="1" style="vertical-align:middle;"> <a {$lnk}> {$d}</a></font>   </p>
              
              <p style="position: relative; top:10px; background-image: url('/imgs/reso.png'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 30px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">{$g}</font>   </p>
              <p style="position: relative; top:10px; background-image: url('{$img}'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 56px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">{$b}</font>   </p>
              
              
              <p style="position: relative; top:10px; background-image: url('{$osimg}'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 62px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">{$c}</font>   </p>
              <p style="position: relative; top:10px; background-image: url('/imgs/lang.png'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 66px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">{$e}</font>   </p>
              <p style="position: relative; top:10px; background-image: url('/imgs/color/colors_M.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 72px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">{$f}Bit</font>   </p>
              
           

    
HERE;
        
        
 return $vv;       
    }
    
    
?>