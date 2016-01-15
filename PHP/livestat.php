<?php
session_start();
if(!isset($_SESSION['s1'])){
header('location:login.php');
}
if(isset($_POST['sit']))   
{
 $_SESSION['site1']=$_POST['sit'];
 
}
else
{
 include_once('db.php');
    $q=mysql_query("select * from sites where c_id='".$_SESSION['s14']."'");  //Here c_id will be track from $_SESSION['cid'] OK.
    $row=mysql_fetch_array($q);
    
$_SESSION['site1']=$row['s_id'];  
}

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



<script type="text/javascript" src="js/jquery.min.js"></script>


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
      if(xmlhttp.responseText.length<10){
          return false;
      }
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
      setInterval("ckeckLast()",1000);
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
               <script type="text/javascript">
               
               function ch(ctrl)
               {
               var strSite = ctrl.options[ctrl.selectedIndex].value; 
               document.getElementById('sit').value=strSite;
                frm.submit();
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
    
  <div style="width: 100%; height: 30px;">
 <a href="userarea.php">  Home </a> |
 <a href="livestat.php">  Live Stat </a> |
 <a href="browserstat.php">  Browser Analysis </a> |
 <a href="osstat.php">  OS Analysis </a> |
 <a href="countrystat.php">  Country Analysis </a> |
 <a href="languagestat.php">  Language Analysis </a> |
 <a href="screenstat.php">  Screen Analysis </a> |
 <a href="colorstat.php">  Color Depth Analysis </a> |
 <a href="logout.php">  Logout </a> |
 </div>
 <form action="livestat.php" name="frm" method="post">
    
     <center> Live stat for the site : 
     <select name="site" onchange="return ch(this);">
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
     
 <input type="hidden" name="sit" id="sit" value="" >
       </center>
                   </form>
<div id="itm" style="position: relative;    background-image: url('c2.png');   width: 904px; height: 55px; visibility: hidden;" >
              <p id="ip" style="position: relative; top:20px; float: left; text-align: justify;   left: 20px; width: 140px;  "><font face="verdana" color="green" size="1">115.265.154.51</font>   </p>
              <p id="reffer" style="position: relative;top:20px; float: left; text-align: justify;   left: 40px; width: 480px;  "><font face="verdana" color="green" size="1"></font>   </p>
              <p id="browser" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 56px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;"></font>   </p>
              <p id="os" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 62px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;"></font>   </p>
              <p id="resolution" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 66px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">Win 7</font>   </p>
              <p id="color" style="position: relative; top:10px; background-image: url('/imgs/browser/browsers_chrome.gif'); background-repeat: no-repeat; background-position: top; float: left; text-align: center; position: relative;  left: 72px; width: 50px;  "><font face="verdana" color="green" size="1" style="position: relative; top: 15px;">Win 7</font>   </p>
              
           
        </div>  
     <div style="width: 910px;">
     
     
              <p style="vertical-align:text-middle;line-height:95%;overflow: hidden; position: relative;  float: left; text-align: center;   left: 5px; width: 200px;  "><font face="verdana" color="white" size="1" style="overflow: hidden;"><b>IP Address & Location</b></font>   </p>
              <p style="position: relative;  float: left; text-align: center;   left: 20px; width: 380px;  "><font face="verdana" color="white" size="1" style="vertical-align:middle;"><b> Refferal Page [from where traffic come]</b></font>   </p>
              <p style="position: relative;  float: left; text-align: center;   left: 30px; width: 50px;  "><font face="verdana" color="white" size="1" style="position: relative; "><b>Resolution</b></font>   </p>
              <p style="position: relative;  float: left; text-align: center;   left: 56px; width: 50px;  "><font face="verdana" color="white" size="1" style="position: relative; "><b>Browser</b></font>   </p>
              <p style="position: relative;  float: left; text-align: center;   left: 62px; width: 50px;  "><font face="verdana" color="white" size="1" style="position: relative; "><b>OS</b></font>   </p>
              <p style="position: relative;  float: left; text-align: center;   left: 66px; width: 50px;  "><font face="verdana" color="white" size="1" style="position: relative; "><b>Lang</b></font>   </p>
              <p style="position: relative;  float: left; text-align: center;   left: 72px; width: 50px;  "><font face="verdana" color="white" size="1" style="position: relative; "><b>Color</b></font>   </p>
              
     </div>   
    <div id="main" style="width:910px;height: 550px; overflow: hidden;">

    </div>    
    

    
</div> <!-- END of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">

            
        <div class="cleaner"></div>
        <?php
    for($i=44;$i<90;$i++)
   // echo '<img src="http://www.indianwebanalyst.in/ttoi.php?cid=free_111&fnt='.$i.'" alt="Hit counter">';
?>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>