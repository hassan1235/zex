<?php
$host = "localhost";
$username = "zex1_zex";
$password = "mindkiller"; 
$dbname = "zex1_zex";
$connection = mysql_connect($host,$username,$password);
if (!$connection){
die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>
