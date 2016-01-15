<?php
session_start();
$_SESSION['cp']=$_GET['d'];
echo $_SESSION['cp'];
?>