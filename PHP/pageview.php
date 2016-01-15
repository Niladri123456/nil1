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
<style type="text/css">
#customers
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#customers td, #customers th 
{
font-size:1.2em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#customers th 
{
font-size:1.4em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#fff;
}
#customers tr.alt td 
{
color:#000;
background-color:#00F6D6;
}
#customers tr 
{
color:#000;
background-color:#A7C942;
}
</style>
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
               
               function ch(ctrl)
               {
               var strSite = ctrl.options[ctrl.selectedIndex].value; 
               document.getElementById('sit').value=strSite;
                frm.submit();
               }
               
               
               </script>
               
</head>

<body onload="return strt();">

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
 <a href="account.php">  Account </a> |
 <a href="logout.php">  Logout </a> |
 </div>
 <form action="pageview.php" name="frm" method="post">
    
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
                   
                    <table id="customers">
<tbody>
<tr>
  <th>Page Address</th>
  <th>Total View</th>
  
</tr>    
 <?php
 $i=0;
 $k="";
include_once('db.php');
    $q=mysql_query("select distinct c_page from tracker where c_id='".$_SESSION['s14']."' and c_pageid='".$_SESSION['site1']."'");
           while($row=mysql_fetch_array($q)){
        if($i%2==0){
            $k='class="alt"';
        }
        else{
            $k="";
        }
        $i++;
        $qq=mysql_query("select count(c_page) as tot from tracker where c_id='".$_SESSION['s14']."' and c_pageid='".$_SESSION['site1']."' and c_page='".$row['c_page']."'");
              while($r=mysql_fetch_array($qq)){

              $vv=<<<HERE

    <tr {$k}>
<td>{$row['c_page']}</td>
<td>{$r['tot']}</td>
</tr>
    
HERE;
     
          }
     echo $vv;
     }
    
     //  echo $content;
    
?>   
</tbody></table> 
    
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

