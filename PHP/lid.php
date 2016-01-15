<?php
include_once('db.php');
$row=mysql_fetch_array(mysql_query("select max(track_id)as mx from tracker"));
echo $row['mx'];
?>