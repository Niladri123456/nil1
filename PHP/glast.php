<?php
    $sit=$_GET['sit'];  
   $lst=$_GET['lst'];
 
    include_once('db.php');
    $q=mysql_query("select * from tracker where c_id='".$sit."' and track_id>".$lst);
           while($row=mysql_fetch_array($q)){

            if(strlen($row['c_ip'])<2)  {
                exit();
            }
            echo $row['c_page']."^".$row['c_city']."^".$row['c_state']."^".$row['c_country'];
            //echo "Free service will stop soon.^Please Buy a premium account^.^.";
          
          }
          $rr=mysql_fetch_array(mysql_query("select count(c_id) as tot from tracker where c_id='".$sit."'"));
          
          
           echo "^".$rr['tot'];
        //echo "000";
    
   
    
    
    
    
    
   
    
    

    
    
?>