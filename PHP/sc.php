<?php
    
    function countryCityFromIP($ipAddr)
{
//function to find country and city from IP address
//Developed by Roshan Bhattarai  <a href="http://roshanbh.com.np">http://roshanbh.com.np</a> 
//verify the IP address for the
ip2long($ipAddr)== -1 || ip2long($ipAddr) === false ? trigger_error("Invalid IP", E_USER_ERROR) : "";
$ipDetail=array(); //initialize a blank array
//get the XML result from hostip.info
$xml = file_get_contents("http://api.hostip.info/?ip=".$ipAddr);
//get the city name inside the node <gml:name> and </gml:name>
preg_match("@<Hostip>(\s)*<gml:name>(.*?)</gml:name>@si",$xml,$match);
//assing the city name to the array
$ipDetail['city']=$match[2]; 
//get the country name inside the node <countryName> and </countryName>
preg_match("@<countryName>(.*?)</countryName>@si",$xml,$matches);
//assign the country name to the $ipDetail array
$ipDetail['country']=$matches[1];
//get the country name inside the node <countryName> and </countryName>
preg_match("@<countryAbbrev>(.*?)</countryAbbrev>@si",$xml,$cc_match);
$ipDetail['country_code']=$cc_match[1]; //assing the country code to array
//return the array containing city, country and country code
return $ipDetail;
}
    
    function getBrowser()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $ub = 'Unknown';
        if(preg_match('/MSIE/i',$u_agent))
        {
            $ub = "IE";
        }
        elseif(preg_match('/Firefox/i',$u_agent))
        {
            $ub = "Firefox";
        }
        elseif(preg_match('/Safari/i',$u_agent))
        {
            $ub = "Safari";
        }
        elseif(preg_match('/Chrome/i',$u_agent))
        {
            $ub = "Chrome";
        }
        elseif(preg_match('/Flock/i',$u_agent))
         {
            $ub = "Flock";
        }
        elseif(preg_match('/Opera/i',$u_agent))
        {
            $ub = "Opera";
        }
        elseif(preg_match('/Netscape/i',$u_agent))
        {
            $ub = "Netscape";
        } 
        return $ub;
    }
    
        function getOs()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $ub = 'Unknown';
        if(preg_match('/windows/i',$u_agent))
        {
            $ub = "Windows";
        }
        elseif(preg_match('/mac/i',$u_agent))
        {
            $ub = "Mac";
        }
        elseif(preg_match('/linux/i',$u_agent))
        {
            $ub = "Linux";
        }
        
        return $ub;
    }
?>