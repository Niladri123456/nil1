<?php
    include_once('db.php');
    
    $row=mysql_fetch_array(mysql_query("select count(uname)as tot from users where uname='".$_GET['u']."'"));
    if ($row['tot']>0){
        echo "false";
    }
    else{
        echo 'true';
    }
    
?>