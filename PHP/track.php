<?php
// IP Tracking APIKEY = bfa4c5277fd57f155bc2304f445032602af56229574da720fc6cbfdf4e90bdc3
//echo "Complete";
    include_once('db.php');
    if(!isset($_GET['a']) || !isset($_GET['aa']) || !isset($_GET['b']) || !isset($_GET['c']) || !isset($_GET['d']) || !isset($_GET['e']) || !isset($_GET['f']) || !isset($_GET['g']) ) {
        exit();
    }
   try{ 
    $cid=$_GET['a'];
    $site="";
$page_name = $_GET['aa'];
if  (strlen($page_name)>5) {
/* $slash_idx = strpos($page_name, "/",2);
$slash_idx1 = strrpos($page_name, "/"); 
$page_name = substr($page_name, $slash_idx +2,$slash_idx1-$slash_idx-2);
*/
$site=$page_name;
}
else
{
    $site="Direct";
}

 $browser=$_GET['b']; 
 if ($browser="Microsoft Internet Explorer")   {
    $browser="MSIE";
 }
 $os=$_GET['c'];  
 $resolution=$_GET['d']; 
 $language=$_GET['e'];  
 $color=$_GET['f'];
 $ip=$_SERVER['REMOTE_ADDR'];
 $pageadd=$_SERVER['HTTP_REFERER'];
 $pageid=$_GET['g'];
 //file_get_contents("http://api.hostip.info/get_html.php?ip=12.215.42.19");
 
 include('ip2locationlite.class.php');
 
//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('bfa4c5277fd57f155bc2304f445032602af56229574da720fc6cbfdf4e90bdc3');
 
//Get errors and locations
$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
  
     
$tags = get_meta_tags('http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress='.$ip);
$country= "Unknown";
$city= "Unknown";    
$state= "Unknown";    

$country= $locations['countryName'];
$city= $locations['cityName'];    
$state= $locations['regionName'];    

    
$res=mysql_query("insert into tracker(c_id,c_ip,c_reffer,c_os,c_browser,c_resolution,c_language,c_color,ts,c_country,c_pageid,c_city,c_state,c_page) values('".$cid."','".$ip."','".$site."','".$os."','".$browser."','".$resolution."','".$language."','".$color."',NOW(),'".$country."','".$pageid."','".$city."','".$state."','".$pageadd."')");


echo "Complete!";
   }
   catch (Exception $e){
       echo $e;
   }



 
  
?>