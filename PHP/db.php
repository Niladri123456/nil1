<?php
$con = mysql_connect("localhost","indianwe_admin","nopass123#@!");
if (!$con)
  {
      echo "Error";
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("indianwe_db", $con);
// some code

?>