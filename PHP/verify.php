<?php
    $a=$_GET['id'];
    $b=$_GET['code'];
    include_once('dbq.php');
  $q=getDataFromUserId($a,12);
  if($q=='Verified')
  {
      echo "Account already verified!";
      exit();
  }
  if ($q=='false' || $q!=$b){
      echo "Sorry wrong verification code.";
      exit();
      
  }
  else{
      
      mysql_query("update users set verification='Verified' where member_id=".$a);
      echo "Account successfully verified!";
  }
?>
